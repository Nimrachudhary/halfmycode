<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MyCustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (! auth()->check()) {
            return redirect('/login');
        }

        // The user is authenticated, so proceed to the next middleware or the route handler
        return $next($request);
    }
}
