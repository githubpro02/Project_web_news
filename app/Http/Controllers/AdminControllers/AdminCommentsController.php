<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class AdminCommentsController extends Controller
{
    private  $rules = [
                'post_id' => 'required|numeric',
                'the_comment' => 'required|min:3|max:1000',
                'user_id' => 'required|numeric'
            ];


    public function index(Request $request)
    {
        // Start a query builder for posts with their associated category
        $query = Comment::with('user');
    
        // Check if there's a search query in the request
        if ($request->has('search') && !empty($request->input('search'))) {
            $keyword = $request->input('search');
            $query->where('id', 'LIKE', "%{$keyword}%")
                  ->orwhere('the_comment', 'LIKE', "%{$keyword}%")
                  ->orWhereHas('user', function ($q) use ($keyword) {
                      $q->where('name', 'LIKE', "%{$keyword}%");
                  });
        }        
    
        // Get paginated results, ordered by ID
        $comments = $query->paginate(20);
    
        return view('admin_dashboard.comments.index', compact('comments'));
    }


    public function create()
    {
        return view('admin_dashboard.comments.create',[
            'posts' => Post::pluck('title', 'id'),
        ]);
    }


 
    public function store(Request $request)
    {

        $validated = $request->validate($this->rules);
        $validated['user_id'] = Auth::id();

        Comment::create($validated);
        return redirect()->route('admin.comments.create')->with('success', 'Thêm bình luận mới thành công.');
    }

 
    public function edit(Comment $comment)
    {
        return view('admin_dashboard.comments.edit',[
            'posts' => Post::pluck('title', 'id'),
            'comment' => $comment
        ]);
    }


    public function update(Request $request, Comment $comment)
    {
        $validated = $request->validate($this->rules);
 
        $comment->update($validated);
        return redirect()->route('admin.comments.edit',$comment)->with('success', 'Sửa bình luận mới thành công.');
    }


    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('admin.comments.index')->with('success', 'Xóa bình luận mới thành công.');
    }
}
