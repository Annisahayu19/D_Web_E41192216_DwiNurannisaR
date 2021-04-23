<?php

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    public function handle($_request, Closure $next)
    {
        return $next($request);
    }
}