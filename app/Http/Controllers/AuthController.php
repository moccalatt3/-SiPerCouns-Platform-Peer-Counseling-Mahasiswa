<?php

// AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        Log::info('Login attempt', ['credentials' => $credentials]);

        // Check for admin
        if (Auth::guard('web')->attempt($credentials)) {
            Log::info('Admin login successful');
            return redirect()->route('admin.dashboard');
        }

        // Check for konselor
        if (Auth::guard('konselor')->attempt($credentials)) {
            Log::info('Konselor login successful');
            return redirect()->route('konselor.dashboard');
        }

        // Check for pengguna
        if (Auth::guard('pengguna')->attempt($credentials)) {
            Log::info('Pengguna login successful');
        
            // Menyimpan id_pengguna di session
            $pengguna = Auth::guard('pengguna')->user();
            session(['id_pengguna' => $pengguna->id_pengguna]);
        
            Log::info('Redirecting to beranda');
            return redirect()->route('berandapengguna');
            
        }

        Log::error('Login failed', ['credentials' => $credentials]);
        return redirect()->route('login')->withErrors(['login' => 'Login details are not valid']);
    }



    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pengguna,email',
            'username' => 'required|string|max:255|unique:pengguna,username',
            'password' => 'required|string|min:8|confirmed',
            'terms' => 'required'
        ]);

        $pengguna = new Pengguna();
        $pengguna->name = $request->name;
        $pengguna->email = $request->email;
        $pengguna->username = $request->username;
        $pengguna->password = Hash::make($request->password);
        $pengguna->save();

        return redirect()->route('regist')->with('success', 'Akun berhasil dibuat.');
    }
}
