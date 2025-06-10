<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthNextAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth('user')->user()) {
            if (auth('user')->user()->status=="Active") {
                if (auth('user')->user()->level == "202500" || auth('user')->user()->level == "202501" || auth('user')->user()->level == "202502") {
                    return $next($request);
                }
                else {
                    return redirect()->route('home');
                }
            }
            else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('home');
        }
    }
}
