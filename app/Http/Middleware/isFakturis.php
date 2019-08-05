<?php

namespace App\Http\Middleware;

use Closure;

class isFakturis
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
        if(Auth::guard($guard)->check() && Auth::user() &&  (Auth::user()->jabatan == 1 || Auth::user()->jabatan == 2)){
            return $next($request);
        }
        
        return redirect('/login');
    }
}
