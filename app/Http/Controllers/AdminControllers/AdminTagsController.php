<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
class AdminTagsController extends Controller
{

    public function index(Request $request)
    {
        // Start a query builder for posts with their associated category
        $query = Tag::query();
    
        // Check if there's a search query in the request
        if ($request->has('search') && !empty($request->input('search'))) {
            $search = $request->input('search');
            $query->where('id', 'LIKE', "%{$search}%")
                  ->orWhere('name', 'LIKE', "%{$search}%");
        }
    
        // Get paginated results, ordered by ID
        $tags = $query->with('posts')->paginate(20);
    
        return view('admin_dashboard.tags.index', compact('tags'));
    }

    public function show(Tag $tag, Request $request)
    {
        // Start building the query
        $query = $tag->posts()->with('category');

        // Check if there's a search keyword
        if ($request->has('search') && !empty($request->input('search'))) {
            $keyword = $request->input('search');
            $query->where(function ($query) use ($keyword) {
                $query->where('title', 'LIKE', "%{$keyword}%")
                    ->orWhere('excerpt', 'LIKE', "%{$keyword}%")
                    ->orWhereHas('category', function ($query) use ($keyword) {
                        $query->where('name', 'LIKE', "%{$keyword}%");
                    });
            });
        }

        // Paginate the posts
        $posts = $query->paginate(20);
        
        return view('admin_dashboard.tags.show',[
            'tag' => $tag,
            'posts' => $posts,
        ]);
    }

    public function destroy(Tag $tag)
    {
        $tag->posts()->detach();
        $tag->delete();
        return redirect()->route('admin.tags.index')->with('success','Xóa Từ khóa thành công.');
    }

}
