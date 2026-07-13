<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse; // Import RedirectResponse

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        
        // Panggil method authenticated() untuk custom redirect
        return $this->authenticated($request, $request->user()); 
    }

    /**
     * CUSTOM REDIRECT LOGIC
     * * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user): RedirectResponse
    {
        // 1. Logika untuk Admin
        if ($user->email === 'admin@konsultanpajak.com') {
            return redirect()->route('dashboard'); // Admin ke Dashboard Admin
        }
        
        // 2. Logika untuk User Biasa
        // Semua user lain diarahkan ke halaman utama (welcome.blade.php)
        return redirect()->route('home'); // User Biasa diarahkan ke halaman utama
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}