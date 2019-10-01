<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        // Checking to see if the age parameter exists and if it is less than or equal to 18
        if (!$request->age || $request->age <= 18) {
            return redirect('/');
        }

        return $next($request);
    }
}
