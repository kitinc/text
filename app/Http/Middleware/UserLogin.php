<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class UserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard=null)
    {
      if (Auth::guard('user')->check()) {
        return $next($request);
      }
      return redirect('user_login');
    }
}
