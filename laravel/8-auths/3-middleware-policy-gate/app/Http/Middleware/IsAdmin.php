<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role_id === 1){
            return $next($request);
        } else{
            $role = Auth::user()->role->name;
            return redirect()->back()->with("message", "le rôle $role ne vous donne pas accès à cette section.");
        }
    }
}