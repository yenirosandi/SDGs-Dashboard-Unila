<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;//jgn lupa tambah ini

class Admin
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
        if(Auth::check() && Auth::user()->isAdmin()){
            //isAdmin function is at user MOdel
            return $next($request);
        }
        return redirect('home');
    }
}
