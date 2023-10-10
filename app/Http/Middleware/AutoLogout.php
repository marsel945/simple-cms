<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AutoLogout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected $timeout = 900; // 15 minutes

    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $lastActivity = session('lastActivityTime');

            if (isset($lastActivity) && time() - $lastActivity > $this->timeout) {
                Auth::logout();
                session()->flash('message', 'You have been logged out due to inactivity.');
                return redirect('/login');
            }

            session(['lastActivityTime' => time()]);
        }

        return $next($request);
    }
}
