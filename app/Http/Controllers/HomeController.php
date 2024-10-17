<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\User;
use App\Models\Image;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){

        $posts = Post::latest()
        ->approved();
        // where('approved',1)
        // ->withCount('comments')->paginate(8); 
        // phân trang 8 bài
        $recent_posts = Post::latest()->take(5)->get();
        $categories = Category::where('name','!=','Chưa phân loại')->orderBy('created_at','DESC')->take(10)->get();
        // $categories = Category::where('name','!=','Chưa phân loại')->withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        // $tags = Tag::latest()->take(50)->get();

       
        /*----- Lấy ra 4 bài viết mới nhất theo các danh mục khác nhau -----*/
        $category_unclassified = Category::where('name', 'Chưa phân loại')->first();

        // Initialize array to avoid undefined index errors
        $posts_new = [];
        
        // Get the first post, ensuring category exists
        $posts_new[0] = Post::latest()->approved()
                ->where('category_id', '!=', optional($category_unclassified)->id)
                ->with('image')
                ->take(1)->get();
        
        $posts_new[1] = Post::latest()->approved()
                ->where('category_id', '!=', optional($category_unclassified)->id)
                ->where('category_id', '!=', $posts_new[0][0]->category->id)
                ->with('image')
                ->take(1)->get();
        
        $posts_new[2] = Post::latest()->approved()
                ->where('category_id', '!=', optional($category_unclassified)->id)
                ->where('category_id', '!=', $posts_new[0][0]->category->id)
                ->where('category_id', '!=', $posts_new[1][0]->category->id)
                ->with('image')
                ->take(1)->get();
        
        $posts_new[3] = Post::latest()->approved()
                ->where('category_id', '!=', optional($category_unclassified)->id)
                ->where('category_id', '!=', $posts_new[0][0]->category->id)
                ->where('category_id', '!=', $posts_new[1][0]->category->id)
                ->where('category_id', '!=', $posts_new[2][0]->category->id)
                ->with('image')
                ->take(1)->get();
        
        
        // dd($posts_new);
        // dd($posts_new[3]);
        
        // Lấy ra tin nổi bật -- Lấy theo views 
        $outstanding_posts = Post::orderBy('views', 'DESC')->take(5)->get();

        // Lấy ra tất cả danh mục tin tức
        $stt_home = 0;
        $category_home = Category::where('name', '!=', 'Chưa phân loại')->orderBy('created_at', 'DESC')->take(10)->get();
        
        foreach($category_home as $category_item ){
            // Tạo tin tức mới nhất cho layout master
            $stt_home = $stt_home + 1;    
            if($stt_home === 1)
                $post_category_home0 =  Post::latest()->approved()->where('category_id',$category_item->id)->take(5)->get();
            if($stt_home === 2)
                $post_category_home1 =  Post::latest()->approved()->where('category_id',$category_item->id)->take(6)->get();
            if($stt_home === 3)
                $post_category_home2 =  Post::latest()->approved()->where('category_id',$category_item->id)->take(8)->get();
            if($stt_home === 4)
                $post_category_home3 =  Post::latest()->approved()->where('category_id',$category_item->id)->take(5)->get();
            if($stt_home === 5)
                $post_category_home4 =  Post::latest()->approved()->where('category_id',$category_item->id)->take(6)->get();
            if($stt_home === 6)
                $post_category_home5 =  Post::latest()->approved()->where('category_id',$category_item->id)->take(5)->get();
            if($stt_home === 7)
                $post_category_home6 =  Post::latest()->approved()->where('category_id',$category_item->id)->take(5)->get();
            if($stt_home === 8)
                $post_category_home7 =  Post::latest()->approved()->where('category_id',$category_item->id)->take(5)->get();
            if($stt_home === 9)
                $post_category_home8 =  Post::latest()->approved()->where('category_id',$category_item->id)->take(8)->get();
            if($stt_home === 10)
                $post_category_home9 =  Post::latest()->approved()->where('category_id',$category_item->id)->take(4)->get();
         }

        return view('home', [
            'posts' => $posts,
            'posts_new' => $posts_new,
            'post_category_home0' => $post_category_home0, // Bài viết danh mục 5
            'post_category_home1' => $post_category_home1, // Bài viết danh mục 1
            'post_category_home2' => $post_category_home2, // Bài viết danh mục 2
            'post_category_home3' => $post_category_home3, // Bài viết danh mục 3
            'post_category_home4' => $post_category_home4, // Bài viết danh mục 4
            'post_category_home5' => $post_category_home5, // Bài viết danh mục 10
            'post_category_home6' => $post_category_home6, // Bài viết danh mục 6
            'post_category_home7' => $post_category_home7, // Bài viết danh mục 7
            'post_category_home8' => $post_category_home8, // Bài viết danh mục 8
            'post_category_home9' => $post_category_home9, // Bài viết danh mục 9
            'outstanding_posts' => $outstanding_posts,
            'categories' => $categories,
            'category_home' => $category_home,
        ]);
    }

    public function newPost(){
        
        return view('newPost');
    }

    public function hotPost(){
        
        return view('hotPost');
    }

    public function viewPost(){
        
        return view('viewPost');
    }

    public function erorr404(){
        return view('errors.404');
    }

    public function profile(){
        return view('profile');
    }

}
 