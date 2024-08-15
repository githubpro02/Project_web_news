<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class CategoryController extends Controller
{
    
    public function index(){

        return view('categories.index');
    }

    public function show(){
        
        return view('categories.show');

    }
}
