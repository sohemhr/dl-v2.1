<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthUsers
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
                return $next($request);
            }
            else {
                // return redirect()->route('users.login');
                return redirect()->route('home');
            }
                
            // }
            // elseif (auth('agen')->user()) {
            //         if (auth('agen')->user()->agen_status=="Active") {
            //             return $next($request);
            //         } 
            //         return redirect()->route('agen.login');
        } else {
            return redirect()->route('home');
        }
        
        // return redirect()->route('admin.login');
    }
}
