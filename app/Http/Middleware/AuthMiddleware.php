<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()){
            return $next($request);
        } else {
            return redirect('admin/404');
            //return view('admin/login');
            //return response('Unauthorized.', 401);
        }

    }
}
