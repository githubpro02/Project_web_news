<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Role;

class DashboardController extends Controller
{
    public function index(Request $request){

        return view('admin_dashboard.index');
    }

}
