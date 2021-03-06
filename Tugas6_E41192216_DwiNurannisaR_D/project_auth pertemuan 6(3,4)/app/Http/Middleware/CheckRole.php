<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     * 
     * @param   \Illuminate\Http\Request   $_request
     * @param   \Closure    $next
     * @param string $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if ($request->user()->hasRole($role)){
            //Redirect
        }
        return $next($request);
        }
    }
    