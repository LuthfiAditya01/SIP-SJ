<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                try {
                    $user = Auth::user();
                    if ($user->hasRole('admin')) {
                        return redirect('/admin/dashboard');
                    } elseif ($user->hasRole('bidan')) {
                        return redirect('/bidan/dashboard');
                    } elseif ($user->hasRole('kader')) {
                        return redirect('/kader/dashboard');
                    }
                    
                    auth()->logout();
                    return redirect()->route('login')
                        ->with('error', 'Akun anda belum memiliki role');
                    
                } catch (\Exception $e) {
                    \Log::error('Redirect error: ' . $e->getMessage());
                    auth()->logout();
                    return redirect()->route('login')
                        ->with('error', 'Terjadi kesalahan');
                }
            }
        }

        return $next($request);
    }
}
