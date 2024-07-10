<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // Check if user_id cookie exists
       if ($request->cookie('user_id')) {
        return $next($request);
    }

    // Redirect to login if cookie does not exist
    return redirect('/login');
    }
}
