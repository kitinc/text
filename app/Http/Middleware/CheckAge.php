<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
      @if (Auth::check()) {
        return view('users.user');
      }()
        @else {
        return view('users.user_login');
        }
        @endif
    }
}
