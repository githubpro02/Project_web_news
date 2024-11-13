<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Role;

class DashboardController extends Controller
{
    public function index(Request $request){

        $countPost = Post::all()->count();
        $countCategories = Category::all()->count();

        $role_admin = Role::where('name','!=','user')->first();
        $countAdmin = User::all()->where('role_id', $role_admin->id)->count();

        $role_user = Role::where('name','user')->first();
        $countUser = User::all()->where('role_id', $role_user->id)->count();

        $postAll = Post::all();

        $countView = 0;
        $countComments = 0;
        foreach ($postAll as $post) {
            $countView =  $countView + $post->views;
            $countComments =  $countComments + $post->comments()->count();
        }


        return view('admin_dashboard.index',[
            'countPost' => $countPost,
            'countCategories' => $countCategories,
            'countAdmin' => $countAdmin,
            'countUser' => $countUser,
            'countView' => $countView,
            'countComments' => $countComments,
        ]);
    }

}






// namespace App\Http\Controllers\AdminControllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\User;
// use App\Models\Post;
// use App\Models\Category;
// use App\Models\Role;
// use Carbon\Carbon;

// class DashboardController extends Controller
// {
//     public function index(Request $request) {
//         $countPost = Post::count(); // Đếm tổng số bài viết
//         $countCategories = Category::count(); // Đếm tổng số danh mục

//         $role_admin = Role::where('name', '!=', 'user')->first();
//         $countAdmin = User::where('role_id', $role_admin->id)->count();

//         $role_user = Role::where('name', 'user')->first();
//         $countUser = User::where('role_id', $role_user->id)->count();

//         $postAll = Post::all();

//         $countView = 0;
//         $countComments = 0;
//         foreach ($postAll as $post) {
//             $countView += $post->views;
//             $countComments += $post->comments()->count();
//         }

//         // Lấy lượt xem và bình luận trong 7 ngày gần nhất của tất cả các tài khoản
//         $viewsPerDay = [];
//         $commentsPerDay = [];
//         for ($i = 6; $i >= 0; $i--) {
//             $date = Carbon::now()->subDays($i)->toDateString();

//             // Lượt xem
//             $viewsPerDay[$date] = Post::whereDate('updated_at', $date)->sum('views');

//             // Bình luận
//             $commentsPerDay[$date] = Post::withCount(['comments' => function ($query) use ($date) {
//                 $query->whereDate('created_at', $date);
//             }])
//             ->get()
//             ->sum('comments_count');
//         }

//         return view('admin_dashboard.index', [
//             'countPost' => $countPost,
//             'countCategories' => $countCategories,
//             'countAdmin' => $countAdmin,
//             'countUser' => $countUser,
//             'countView' => $countView,
//             'countComments' => $countComments,
//             'viewsPerDay' => $viewsPerDay,
//             'commentsPerDay' => $commentsPerDay,
//         ]);
//     }
// }