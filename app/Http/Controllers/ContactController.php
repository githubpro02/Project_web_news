<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContacMail;
use Illuminate\Support\Facades\Validator;

use App\Models\Category;
use App\Models\Post;

class ContactController extends Controller
{
    public function create(){
        
        return view('contact');
    }

    public function store(){

    }
}
