<?php

namespace App\Http\Middleware;

use Closure;
use App\model\Admin;

class SuperAdminMiddleware
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
        $admin = Admin::where('type','super')->get();
        if(count($admin)>0){
            return redirect('/admin/login');
        }
        return $next($request);
    }
}
