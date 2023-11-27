<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if (Auth::user()->is_superuser == '1'){
                return $next($request);
            }else{
                return redirect('/')->with('message', 'Logged in Successfully!');
            }
        
        } else {
            return redirect('/adminlogin')->with('message', 'You need to login as admin first');
        }
        return $next($request);
    }
}
