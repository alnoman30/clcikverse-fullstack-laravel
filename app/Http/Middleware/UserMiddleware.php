<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request and ensure the authenticated user has the
     * "user" role. If they dont (or arent logged in) we redirect them
     * back to the appropriate dashboard.
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'user') {
            return $next($request);
        }

        // admin users or guests should be bounced out of the user area
        return redirect()->route('admin.dashboard');
    }
}
