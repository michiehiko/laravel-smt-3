<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Redirect to login if the user is not authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = session('user_role');

        // Cast to int sebelum dibandingkan
        if ((int) $userRole !== 1) {
            return back()->with('error', 'Anda tidak memiliki akses administrator.');
        }

        return $next($request);
    }
}
