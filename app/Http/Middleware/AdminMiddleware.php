<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra nếu người dùng đã đăng nhập và có vai trò admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Chuyển hướng hoặc trả lỗi nếu không phải admin
        return redirect('/')->with('error', 'Bạn không có quyền truy cập trang này.');
    }
}
