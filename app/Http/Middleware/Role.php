<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        if(auth()->user()->role == 'client'){
            return $next($request);
        }

        } else if(auth()->user()->role == 'tax_prepare'){
            return $next($request);
        }else if(auth()->user()->role == 'admin'){
            return $next($request);
        }

        // If none of the roles match, redirect with an error message
        return redirect()->back()->with('error', "You don't have the required access.");
    }
}
