<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
        // Validasi user login
        if (!$request->user()) {
            return redirect()->route('login');  // Lebih baik redirect ke login daripada abort 403
        }

        // Jika tidak ada roles yang diberikan
        if (empty($roles)) {
            \Log::warning('No roles specified in middleware');  // Tambah logging
            return $next($request);
        }

        try {
            foreach($roles as $role) {
                if($request->user()->hasRole($role)) {
                    return $next($request);
                }
            }
        } catch (\Exception $e) {
            \Log::error('Role checking error: ' . $e->getMessage());  // Tambah error logging
            abort(500, 'Internal server error');
        }

        return redirect()->back()->with('error', 'Unauthorized access');  // Lebih user friendly
    }
}
