<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfUserVerified
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
        $guard = 'patient';
        if (auth()->guard('doctor')->check()) {
            $guard = 'doctor';
        } elseif (auth()->guard('receptionist')->check()) {
            $guard = 'receptionist';
        }

        $user = auth()->guard($guard)->user();

        return $next($request);
    }
}
