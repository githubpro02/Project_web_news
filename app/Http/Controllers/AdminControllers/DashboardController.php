<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;
use App\Models\PostView;
use App\Models\Category;
use App\Models\Role;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $countPost = Post::count(); // Đếm tổng số bài viết
        $countCategories = Category::count(); // Đếm tổng số danh mục

        $role_admin = Role::where('name', '!=', 'user')->first();
        $countAdmin = User::where('role_id', $role_admin->id)->count();

        $role_user = Role::where('name', 'user')->first();
        $countUser = User::where('role_id', $role_user->id)->count();

        $postAll = Post::all();

        $countView = 0;
        $countComments = 0;
        foreach ($postAll as $post) {
            $countView += $post->views;
            $countComments += $post->comments()->count();
        }

        // Lấy lượt xem và bình luận trong 7 ngày gần nhất
        $viewsPerDay = [];
        $commentsPerDay = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->toDateString();

            // Lấy tổng lượt xem cho ngày hiện tại
            $viewsPerDay[$date] = PostView::whereDate('created_at', $date)->sum('views');

            // Bình luận
            $commentsPerDay[$date] = Post::withCount(['comments' => function ($query) use ($date) {
                $query->whereDate('created_at', $date);
            }])
            ->get()
            ->sum('comments_count');
        }

        // Lấy lượt xem và bình luận theo tháng gần nhất
        $viewsPerMonth = [];
        $commentsPerMonth = [];
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i)->format('Y-m');

            // Lấy tổng lượt xem cho tháng
            $viewsPerMonth[$date] = PostView::whereMonth('created_at', Carbon::parse($date)->month)
                                             ->whereYear('created_at', Carbon::parse($date)->year)
                                             ->sum('views');

            // Lấy tổng bình luận cho tháng
            $commentsPerMonth[$date] = Post::withCount(['comments' => function ($query) use ($date) {
                $query->whereMonth('created_at', Carbon::parse($date)->month)
                      ->whereYear('created_at', Carbon::parse($date)->year);
            }])->get()->sum('comments_count');
        }

        // Most Read Articles (Top 5)
        $mostReadArticles = Post::orderByDesc('views')->take(5)->get();

        // Most Engaged Articles (Top 5, based on comments)
        $mostEngagedArticles = Post::withCount('comments', 'views')
            ->orderByDesc('views')
            ->orderByDesc('comments_count')
            ->take(5)
            ->get();

        // List of Pending Articles (where status is 'pending' or null)
        $pendingArticles = Post::where(function ($query) {
            $query->where('approved', 0)
                  ->orWhereNull('approved');
        })->get();

        // User List/Interactions (Top 5 users based on their interaction count)
        $userInteractions = User::withCount(['posts', 'comments'])
            ->orderByDesc('posts_count')
            ->orderByDesc('comments_count')
            ->take(5)
            ->get();

        // Category List
        $categories = Category::withCount('posts')
            ->where('name', '!=', 'chưa phân loại')
            ->get();

        return view('admin_dashboard.index', [
            'countPost' => $countPost,
            'countCategories' => $countCategories,
            'countAdmin' => $countAdmin,
            'countUser' => $countUser,
            'countView' => $countView,
            'countComments' => $countComments,
            'viewsPerDay' => $viewsPerDay,
            'commentsPerDay' => $commentsPerDay,
            'viewsPerMonth' => $viewsPerMonth,
            'commentsPerMonth' => $commentsPerMonth,
            'mostReadArticles' => $mostReadArticles, 
            'mostEngagedArticles'=> $mostEngagedArticles, 
            'pendingArticles' => $pendingArticles, 
            'userInteractions' => $userInteractions, 
            'categories' => $categories
        ]); 
    
    }


}