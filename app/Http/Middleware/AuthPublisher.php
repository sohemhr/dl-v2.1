<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthPublisher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth('user')->user()) {
            if (auth('user')->user()->status=="Active" && auth('user')->user()->level == "202506") {
                return $next($request);
            }
            else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('home');
        }
    }
}
