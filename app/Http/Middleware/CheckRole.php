<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // 1. Pastikan user sudah login
        if (!$request->user()) {
            return redirect()->route('login'); // Arahkan ke login jika belum login
        }

        // 2. Ubah role user dan parameter ke lowercase untuk hindari case sensitivity
        $userRole = strtolower($request->user()->role);
        $roles = array_map('strtolower', $roles);

        // Tambahkan logging untuk debug
        Log::info('User Role: ' . $userRole);
        Log::info('Allowed Roles: ' . implode(', ', $roles));

        // 3. Cek role
        if (!in_array($userRole, $roles)) {
            return redirect()
                ->route('home')
                ->with('error', 'Akses ditolak! Role Anda adalah ' . $request->user()->role . 
                       ' sedangkan yang diizinkan adalah: ' . implode(', ', array_map('ucfirst', $roles)));
        }

        return $next($request);
    }
}
