@extends('layouts.app');
@section('extracss')
<style>
    body {
        background-color: #e7f1ff; /* Warna latar belakang biru muda */
    }
    .register-container {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
    <div class="register-container">
        <h2 class="text-center">Daftar</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Konfirmasi password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Daftar</button>
            <div class="mt-3 text-center">
                <p>Sudah punya akun? <a href="{{route('login')}}">Login di sini</a></p>
            </div>
        </form>
    </div>
@extends('layouts.footer');