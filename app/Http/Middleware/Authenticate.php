<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return null;
        }

        // Contoh: Redirect ke halaman berbeda berdasarkan role
        if (auth()->check()) {
            $role = auth()->user()->role;
            return match ($role) {
                'admin' => route('dashboard'),
                'kader' => route('dashboard'),
                'bidan' => route('dashboard'),
                default => route('home'),
            };
        }

        return route('login');
    }
}