<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index() {
        return view('auth.login');
    }

    function masuk(Request $request) {
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $u = User::where('email', $request->email)->first();
                session(['user' => $u]);
                
                // Jika login berhasil
                return response()->json([
                    'message' => 'Login berhasil!', // Ganti dengan route yang sesuai setelah login
                ]);
            }

            return response()->json(['message' => 'Email atau password salah.'], 401);
        } catch (\Throwable $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    function logout() {
        Auth::logout();
        session()->forget('user');
        return redirect()->route('login');
    }
}
