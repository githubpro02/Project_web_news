<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

use App\Models\Role;
use App\Models\User;
use App\Models\Image;

class AdminUsersController extends Controller
{
    private $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|max:20',
        'image' => 'nullable|file|mimes:jpg,png,webp,svg,jpeg|dimensions:max-width:300,max-height:300',
        'role_id' => 'required|numeric'
    ];


    public function index(Request $request)
    {
        // Start a query builder for posts with their associated category
        $query = User::with('role');
    
        // Check if there's a search query in the request
        if ($request->has('search') && !empty($request->input('search'))) {
            $search = $request->input('search');
            $query->where('email', 'LIKE', "%{$search}%")
                  ->orWhere('name', 'LIKE', "%{$search}%")
                  ->orWhereHas('role', function ($q) use ($search) {
                      $q->where('name', 'LIKE', "%{$search}%");
                  });
        }
    
        // Get paginated results, ordered by ID
        $users = $query->paginate(20);
    
        // Return the view with posts data
        return view('admin_dashboard.users.index', compact('users'));
    }
  
    public function create()
    {
        return view('admin_dashboard.users.create', [
            'roles' => Role::pluck('name','id'),
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate($this->rules);
        $validated['password'] = Hash::make($request->input('password'));
        $user = User::create($validated);

        if($request->has('image'))
        {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $file_extension = $image->getClientOriginalExtension();
            $path   = $image->store('images', 'public');
            
            $user->image()->create([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => $path
            ]);
        }
        
        return redirect()->route('admin.users.create')->with('success', 'Thêm tài khoản thành công.');
    }

 
    public function edit(User $user)
    {
        return view('admin_dashboard.users.edit', [
            'user' => $user,
            'roles' => Role::pluck('name','id'),
        ]);
    }

    public function show(User $user, Request $request)
    {
        // Start building the query
        $query = $user->posts()->with('category');

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
        
        return view('admin_dashboard.users.show', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $this->rules['password'] = 'nullable|min:3|max:20';
        $this->rules['email'] = ['required','email', Rule::unique('users')->ignore($user)];

        $validated = $request->validate($this->rules);

        if($validated['password'] === null )
            unset($validated['password']);
        else
            $validated['password'] = Hash::make($request->input('password'));

        $user->update($validated);

        if($request->has('image'))
        {
            $image_user = Image::where('imageable_id',  $user->id)->first();
            if($image_user)
                $image_user->delete();

            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $file_extension = $image->getClientOriginalExtension();
            $path   = $image->store('images', 'public');
            
            $user->image()->create([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => $path
            ]);
        }
        
        return redirect()->route('admin.users.edit', $user)->with('success', 'Sửa người dùng thành công.');
    }


    public function destroy(User $user)
    {
        if($user->id === Auth::id())
            return redirect()->back()->with('error', 'Bạn không thể xóa thông tin của bạn ( quản trị viên) ');

        User::whereHas('role', function($query){
            $query->where('name','admin');
        })->first()->posts()->saveMany($user->posts);

        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Xóa người dùng thành công.');
    }
}
