<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      //変更。オリジナルは以下。

//if (Auth::guard($guard)->check()) {

// return redirect('/home');

//}

if (Auth::guard('web')->check()) {
return redirect('/user');

 //viewuserの認証時は、認証を通った後もリダイレクトしない

 }
return $next($request);
}
}
