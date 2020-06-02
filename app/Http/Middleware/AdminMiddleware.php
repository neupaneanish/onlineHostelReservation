<?php

namespace App\Http\Middleware;
use Illuminate\support\Facades\Auth;
use Closure;

class AdminMiddleware
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
        if (Auth::check() && Auth::user()->type=='normal') {
            return redirect('/admin');
        }
        return $next($request);
    }
}
