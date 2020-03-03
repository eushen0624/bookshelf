<?php

namespace App\Http\Middleware;

use Closure;

class isBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user() && Auth::user()->banned_until != NULL && now()->lessThan(Auth::user()->banned_until)){

            Auth::logout();

            Session::flash("message", "Your account is banned, please contact the admin");
            return redirect('/login');
        }else{
            return $next($request);
        }
    }
}
