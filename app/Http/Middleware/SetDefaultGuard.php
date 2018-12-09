<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SetDefaultGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Tells the Auth facade what guard use
        Auth::shouldUse( $this->getCurrentGuard());
        return $next($request);
    }

    private function getCurrentGuard(){
        $guards = config('auth.guards');
        foreach ($guards as $guard_name => $guard_conf){
            if(Auth::guard($guard_name)->check()){
                return $guard_name;
            }
        }
        return 'web';
    }
}
