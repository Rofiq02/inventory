<?php

namespace App\Http\Middleware;

use Closure;

class isLogistik
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
        if(Auth::guard($guard)->check() && Auth::user() &&  (Auth::user()->jabatan == 1 || Auth::user()->jabatan == 2 ||  Auth::user()->jabatan == 3)){
            return $next($request);
        }

        return redirect('/login');
    }
}
