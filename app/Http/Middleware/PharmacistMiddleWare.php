<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class PharmacistMiddleWare
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
        if(Auth::user()->role == "receptionist")
        {
            return redirect('');
        }
        if(Auth::user()->role == "pharmacists"){
            return $next($request);
        }

        return redirect('');
    }
}
