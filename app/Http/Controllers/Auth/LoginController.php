<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;

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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    public function showLoginForm()
    {
        return view('auth.login'); // Ganti dengan view yang Anda inginkan
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial dan autentikasi user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Jika autentikasi berhasil
            return redirect()->intended($this->redirectTo); // Redirect ke dashboard atau halaman lain
        }

        // Jika autentikasi gagal
        return back()->withErrors([
            'email' => 'Incorrect email or password.',
        ])->withInput($request->only('email', 'remember'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
