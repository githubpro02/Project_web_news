<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra nếu người dùng chưa xác thực email
        if (Auth::check() && !Auth::user()->hasVerifiedEmail()) {
            // Chuyển hướng đến trang yêu cầu xác thực email
            return redirect()->route('verification.notice');
        }

        return $next($request);
    }
}