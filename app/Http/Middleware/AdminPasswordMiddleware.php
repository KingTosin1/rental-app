<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Request\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPasswordMiddleware
{
    private const ADMIN_PASSWORD = '0907';

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->get('admin_unlocked') === true) {
            return $next($request);
        }

        // If this is a password submission request, validate it here.
        if ($request->isMethod('post') && $request->routeIs('admin.unlock')) {
            $password = (string) $request->input('password');

            if (hash_equals(self::ADMIN_PASSWORD, $password)) {
                $request->session()->put('admin_unlocked', true);
                $request->session()->regenerate();

                return redirect()->route('admin.applications.index');
            }

            return redirect()->route('admin.unlock.form')->withErrors([
                'password' => 'Incorrect password.',
            ])->withInput();
        }

        // If accessing admin routes without being unlocked, show unlock form.
        if ($request->routeIs('admin.applications.*')) {
            return redirect()->route('admin.unlock.form');
        }

        return $next($request);
    }
}

