<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckLoginAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check() ){ //Không có admin nào đăng nhập
            return $next($request);
        }else if(Auth::check() && Auth::user()->role == "2" ) {
            return redirect()->route('admin');
        }else {
            Auth::logout();
            return redirect()->route('admin.login.index');
        }
    }
}
