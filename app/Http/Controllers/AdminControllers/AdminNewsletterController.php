<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Newsletter;

class AdminNewsletterController extends Controller
{
    public function index()
    {
        return view('admin_dashboard.newsletter.index', [
            'newsletter' => Newsletter::all(),
        ]);
    }

    public function destroy(Newsletter $newsletter){
        $newsletter->delete();
        return redirect()->route('admin.newsletter')->with('success', 'Xóa liên hệ thành công');
    }
}
