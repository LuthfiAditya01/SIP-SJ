<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        try {
            if ($user->hasRole('admin')) {
                return redirect('/admin/dashboard');
            } elseif ($user->hasRole('bidan')) {
                return redirect('/bidan/dashboard');
            } elseif ($user->hasRole('kader')) {
                return redirect('/kader/dashboard');
            }
            
            // Jika tidak punya role, logout dan tampilkan pesan
            auth()->logout();
            return redirect()->route('login')
                ->with('error', 'Akun anda belum memiliki role. Silahkan hubungi admin.');
            
        } catch (\Exception $e) {
            \Log::error('Authentication error: ' . $e->getMessage());
            auth()->logout();
            return redirect()->route('login')
                ->with('error', 'Terjadi kesalahan saat login');
        }
    }
}
