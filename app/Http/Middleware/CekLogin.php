<?php

namespace App\Http\Middleware;

use Closure;

class CekLogin
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
        if (session()->has('username')){
            return $next($request);
        }else{
            return redirect ('/login')->with('pesan',"Silahkan Login terlebih dahulu");
        }
    }
}
