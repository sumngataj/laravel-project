<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            $redirect = redirect()->route('login');
            $redirect->with('message', 'You need to login first');
            return $redirect->getTargetUrl();
        }
        
        return null;
    }

}
