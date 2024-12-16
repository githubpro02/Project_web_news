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

        // Lấy file từ request
        $file = $request->file('file');

        // Xác định loại file dựa trên extension
        $extension = $file->getClientOriginalExtension();
        $allowedImageExtensions = ['jpeg', 'png', 'jpg', 'gif'];
        $allowedVideoExtensions = ['mp4', 'avi', 'mov'];

        if (in_array($extension, $allowedImageExtensions)) {
            // Xác thực file hình ảnh
            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        } elseif (in_array($extension, $allowedVideoExtensions)) {
            // Xác thực file video
            $request->validate([
                'file' => 'required|mimes:mp4,avi,mov|max:10240', // Tối đa 10MB
            ]);
        } else {
            return response()->json(['error' => 'Unsupported file type'], 400);
        }

        // Lưu file vào thư mục tinymce_uploads trong storage
        $path = $file->store('tinymce_uploads', 'public');

        return response()->json(['location' => asset("storage/$path")]);

    
    }
}
