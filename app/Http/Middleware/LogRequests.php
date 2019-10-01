<?php

namespace App\Http\Middleware;

use Closure;

class LogRequests
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
        // Dumping the request url
        // var_dump($request->fullUrl());
        
        return $next($request);
    }
}
