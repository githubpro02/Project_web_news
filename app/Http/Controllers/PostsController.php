<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function show(Post $post){
        
        $recent_posts = Post::latest()->take(5)->get();
        
        $categories  = Category::where('name','!=','Chưa phân loại')->withCount('posts')->orderBy('created_at','DESC')->take(10)->get();
        // $tags = Tag::latest()->take(50)->get();

        /*----- Lấy ra 4 bài viết mới nhất theo các danh mục khác nhau -----*/
        $category_unclassified = Category::where('name','Chưa phân loại')->first();

        $posts_new[0]= Post::latest()->approved()
                    ->where('category_id', '!=', optional($category_unclassified)->id)
                    ->take(1)->get();
        $posts_new[1] = Post::latest()->approved()
                    ->where('category_id', '!=', optional($category_unclassified)->id)
                    ->where('category_id','!=', $posts_new[0][0]->category->id )
                    ->take(1)->get();
        $posts_new[2] = Post::latest()->approved()
                    ->where('category_id', '!=', optional($category_unclassified)->id)
                    ->where('category_id','!=', $posts_new[0][0]->category->id )
                    ->where('category_id','!=', $posts_new[1][0]->category->id )
                    ->take(1)->get();
        $posts_new[3] = Post::latest()->approved()
                    ->where('category_id', '!=', optional($category_unclassified)->id)
                    ->where('category_id','!=', $posts_new[0][0]->category->id )
                    ->where('category_id','!=', $posts_new[1][0]->category->id)
                    ->where('category_id','!=', $posts_new[2][0]->category->id )
                    ->take(1)->get(); 

        
        // Bài viết tương tự 
        $postTheSame = Post::latest()->approved()->where('category_id', $post->category->id)->where('id', '!=' , $post->id)->take(5)->get(); ;
        

        // Bài viết nổi bật
        $outstanding_posts = Post::approved()->where('category_id', '!=',  optional($category_unclassified)->id )->take(5)->get();
        
        // Tăng lượt xem khi xem bài viết
        $post->views =  ($post->views) + 1;
        $post->save();

        return view('post', [ 
            'post' => $post,
            'recent_posts' => $recent_posts,
            'categories' => $categories, 
            // 'tags' => $tags,
            'posts_new' => $posts_new,
            'postTheSame' =>  $postTheSame, // Bài viết tương tự
            'outstanding_posts' => $outstanding_posts, // bài viết xu hướng
        ]);
    }
   
}
