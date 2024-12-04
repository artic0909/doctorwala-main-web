<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        $guards = empty($guards) ? $guards = [null] : $guards;

        foreach ($guards as $guard) {

            #check guard is authenticated
            if(Auth::guard($guard)->check()){

                Auth::shouldUse($guard);
                return $next($request);
            }
        }


        #handle unathenticated session
        $this->unathenticated($guards);


        
    }


    protected function unathenticated(array $guards) {
        throw new AuthenticationException(
            'Unauthenticated', $guards, $this->redirectTo()
        );
    }

    protected function redirectTo() {
        #partner
        if (Route::is('partnerpanel.*')) {
            return route('partnerpanel.partner-login');
        }
        #user
        if (Route::is('dw.*')) {
            return route('dw.user-auth');
        }

        #superadmin
        return route('superadmin.login');
    }
}
