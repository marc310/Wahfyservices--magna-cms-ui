<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
    


/**
 * Get the path the user should be redirected to when they are not authenticated.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return string|null
 */
protected function redirectTo($request)
{
    if (! $request->expectsJson()) {
        if (Arr::first($this->guards) === 'admin') {
            return redirect('/index');
        }

        return route('login');
    }
}

}
