<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Allow only authenticated users with the "admin" role through.
     * Non‑admin users will be redirected back to the regular dashboard.
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // somebody without admin privileges landed in the admin area
        return redirect()->route('dashboard');
    }
}
