<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('LoggedUser') && ($request->path() != '/admin/login' && $request->path() != '/admin/register')) {
            return redirect('/admin/login')->with('error', "Please log in to access this page!");
        }

        // redirect to dashboard if user is logged in
        if (session()->has('LoggedUser') && ($request->path() == '/admin/login' || $request->path() == '/admin/register')) {
            return back();
        }

        // prevent redirect to login after user presses the back button in the browser
        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age-0, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}