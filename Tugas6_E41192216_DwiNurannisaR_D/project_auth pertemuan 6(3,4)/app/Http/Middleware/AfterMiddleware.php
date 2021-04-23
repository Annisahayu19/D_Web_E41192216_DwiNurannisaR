<?php

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    public function handle($_request, Closure $next)
    {
        $response = $next($request);

        return ($request);
    }
}