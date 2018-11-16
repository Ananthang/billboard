<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        switch($guard){
            case 'doctor':
                if (Auth::guard($guard)->check()) {
                    return redirect('doctor/home');
                 }
                 break;

                 default:
                  if (Auth::guard($guard)->check()) {
                        return redirect('/home');
                    }
                break;

       
        }
        return $next($request);
    }
}
