<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TinyMCEController extends Controller
{
    public function upload_tinymce_image(Request $request)
    {
        // Kiểm tra xem file có được gửi lên không
        if (!$request->hasFile('file')) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        // Xác thực file
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Lưu file
        $file = $request->file('file');
        $path = $file->store('tinymce_uploads', 'public');

        return response()->json(['location' => asset("storage/$path")]);
   
  
    }
}
