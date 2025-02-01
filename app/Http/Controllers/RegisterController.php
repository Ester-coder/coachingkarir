<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function index() {
        return view('auth.register');
    }

    function daftar(Request $request) {
        try {
            // Membuat user baru
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'phone' => $request->phone,
            ]);

            // Mengembalikan respon
            return response()->json("Registrasi berhasil! Selamat datang");
        } catch (\Throwable $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}
