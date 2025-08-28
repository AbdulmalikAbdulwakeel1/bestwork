<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();
                
                // Redirect based on user type
                return match($user->type) {
                    'candidate' => redirect()->route('candidate.dashboard'),
                    'employer' => redirect()->route('employer.dashboard'),
                    'admin' => redirect()->route('admin.dashboard'),
                    default => redirect('/') // Use '/' instead of RouteServiceProvider::HOME
                };
            }
        }

        return $next($request);
    }
}