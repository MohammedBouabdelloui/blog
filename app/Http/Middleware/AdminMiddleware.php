<?php

namespace App\Http\Middleware;

use App\Models\author;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
 
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->rool === 'admin') {
            return $next($request);
        }
        return redirect()->route('login');
    }
}
