<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ReceptionistMiddleWare
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
        if (Auth::user()->role == "receptionist") {
            return $next($request);
        }
        return redirect('');
    }
}
