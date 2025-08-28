<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserType
{
    public function handle($request, Closure $next, $type)
    {
        if (auth()->check() && auth()->user()->type === $type) {
            return $next($request);
        }
        
        abort(403, 'Unauthorized access.');
    }
}