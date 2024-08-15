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

        return view('home');
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
 