<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Newsletter;
use App\Mail\NewPostNotification;

class AdminPostsController extends Controller
{

    private $rules = [
        'title' => 'required|max:200',
        'slug' => 'required|max:200',
        'excerpt' => 'required|max:300',
        'category_id' => 'required|numeric',
        // 'thumbnail' => 'required|mimes:jpg,png,webp,svg,jpeg|dimensions:max-width:300,max-height:227',
        'body' => 'required',
    ];

    public function index(Request $request)
    {
        // Start a query builder for posts with their associated category
        $query = Post::with('category');
    
        // Check if there's a search query in the request
        if ($request->has('search') && !empty($request->input('search'))) {
            $keyword = $request->input('search');
            $query->where('title', 'LIKE', "%{$keyword}%")
                  ->orWhere('excerpt', 'LIKE', "%{$keyword}%")
                  ->orWhereHas('category', function ($q) use ($keyword) {
                      $q->where('name', 'LIKE', "%{$keyword}%");
                  });
        }
    
        // Get paginated results, ordered by ID
        $posts = $query->orderBy('id', 'ASC')->paginate(20);
    
        // Return the view with posts data
        return view('admin_dashboard.posts.index', compact('posts'));
    }
    

    public function create()
    {
        return view('admin_dashboard.posts.create',[
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function store(Request $request)
    {
        $this->rules['slug'] = [ 'required', 'string', Rule::unique('posts') ]; // Đảm bảo slug là duy nhất
        $validated = $request->validate($this->rules);
        $validated['user_id'] = Auth::id();
        // Kiểm tra nếu người dùng đã chọn phê duyệt (checkbox checked)
        $validated['approved'] = $request->has('approved') ? true : false;  // Gán giá trị đúng cho 'approved'
        $post = Post::create($validated);

        if($request->has('thumbnail'))
        {
            $thumbnail = $request->file('thumbnail');
            $filename = $thumbnail->getClientOriginalName();
            $file_extension = $thumbnail->getClientOriginalExtension();
            $path   = $thumbnail->store('images', 'public');
            
            $post->image()->create([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => $path
            ]);
        }

        // Lấy danh sách tags từ input, tách chúng thành mảng và loại bỏ các tag trống
        $tags = explode(',', $request->input('tags'));
        $tags_ids = [];
        foreach ($tags as $tag) {
            $tag = trim($tag);// Loại bỏ khoảng trắng thừa
            // Kiểm tra nếu tag không phải là chuỗi trống
            if (!empty($tag)) {
                // Tìm hoặc tạo mới tag nếu không tồn tại
                $existingTag = Tag::firstOrCreate(['name' => $tag]);
                // Thêm ID của tag vào mảng
                $tags_ids[] = $existingTag->id;
            }
        }

        // Gắn các tags đã có vào bài viết
        if (count($tags_ids) > 0)
            $post->tags()->sync( $tags_ids );
        
        // Kiểm tra nếu bài viết được phê duyệt thì gửi email cho tất cả subscribers
        if ($post->approved == 1) {
            $subscribers = Newsletter::all();
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new NewPostNotification($post));
            }
            // Thêm thông báo vào session sau khi gửi email thành công
            session()->flash('success', 'Thêm bài viết thành công và email đã được gửi đến tất cả người đăng ký.');
        } else {
            // Nếu không có thay đổi về phê duyệt, chỉ thông báo sửa thành công
            session()->flash('success', 'Thêm bài viết thành công.');
        }
        return redirect()->route('admin.posts.create');
    }

    public function show($id)
    {
        //
    }


    public function edit(Post $post){
        $tags = '';
        foreach($post->tags as $key => $tag){
            $tags .= $tag->name;
            if($key !== count($post->tags) - 1)
                $tags .= ', ';
        }
        
        return view('admin_dashboard.posts.edit',[
            'post' => $post,
            'tags' => $tags,
            'categories' => Category::pluck('name', 'id')
        ]);
    }


    public function update(Request $request, Post $post)
    {
        $this->rules['thumbnail'] = 'nullable|file||mimes:jpg,png,webp,svg,jpeg,mp4,avi,mov|dimensions:max-width:800,max-height:300';
        $this->rules['slug'] = [ 'required', 'string', Rule::unique('posts')->ignore($post->id), ];// Kiểm tra duy nhất ngoại trừ bài viết hiện tại

        $validated = $request->validate($this->rules);
        $validated['approved'] = $request->has('approved') ? true : false;
        // Kiểm tra sự thay đổi của 'approved' trước khi cập nhật
        $isApprovedChanged = $post->approved != $validated['approved']; 
        $post->update($validated);

        if($request->has('thumbnail'))
        {
            $thumbnail = $request->file('thumbnail');
            $filename = $thumbnail->getClientOriginalName();
            $file_extension = $thumbnail->getClientOriginalExtension();
            $path   = $thumbnail->store('images', 'public');
            
            $post->image()->update([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => $path
            ]);
        }

        $tags = explode(',', $request->input('tags'));
        $tags_ids = [];
        foreach ($tags as $tag) {

            $tag = trim($tag);// Loại bỏ khoảng trắng thừa
            // Kiểm tra nếu tag không phải là chuỗi trống
            if (!empty($tag)) {
                // Tìm hoặc tạo mới tag nếu không tồn tại
                $existingTag = Tag::firstOrCreate(['name' => $tag]);
                // Thêm ID của tag vào mảng
                $tags_ids[] = $existingTag->id;
            }
            
        }

        // Gắn các tags đã có vào bài viết, giữ lại các tag đã gắn trước đó
        if (count($tags_ids) > 0)
            $post->tags()->syncWithoutDetaching( $tags_ids );
        
        // Gửi email nếu trạng thái 'approved' thay đổi và được phê duyệt
        if ($isApprovedChanged && $validated['approved'] == 1) {
            $subscribers = Newsletter::all();
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new NewPostNotification($post));
            }
            // Thêm thông báo vào session sau khi gửi email thành công
            session()->flash('success', 'Sửa bài viết thành công và email đã được gửi đến tất cả người đăng ký.');
        } else {
            // Nếu không có thay đổi về phê duyệt, chỉ thông báo sửa thành công
            session()->flash('success', 'Sửa bài viết thành công.');
        }

        // Trả về trang chỉnh sửa với thông báo thành công
        return redirect()->route('admin.posts.edit', $post);
    }

    public function destroy(Post $post)
    {
        $post->tags()->delete();
        $post->comments()->delete();
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success','Xóa bài viết thành công.');
    }


    // Hàm tạo slug tự động
    public function to_slug(Request $request) {
        $str = $request->title;
        $data['success'] = 1;
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        $data['message'] =  $str;
        return response()->json($data);
    }

    


}
