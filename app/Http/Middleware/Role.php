<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


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
        $userRole = auth()->user()->role;

        // Check if the user has the required role
        if ($userRole === $role || in_array($userRole, ['client', 'tax_prepare', 'admin'])) {
            return $next($request);
        }

        // If the role doesn't match, redirect back with an error
        return redirect()->back()->with('error', "You don't have the required access.");
    }
}
