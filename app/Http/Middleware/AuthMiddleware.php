<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == '2') {
                return $next($request);
            } if ($user->role == '1') {
                Auth::logout(); 
                toastr()->error('Tài khoản này đã bị chặn!');
            }
        } else {
            Auth::logout(); 
            toastr()->error('Vui lòng đăng nhập để sử dụng!');
        }

        return redirect()->route('admin.login.index');
    }
}
