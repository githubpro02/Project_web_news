<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function show(){
        
        return view('post');
    }   
}
