@extends('layouts.master')
@section('extracss')
    <style>
        body {
            background-color: #e7f1ff;
            /* Warna latar belakang biru muda */
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
@section('content')
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <form action="#" id="loginForm">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="mt-2 text-center">
                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
            </div>
        </form>
    </div>
@endsection
@section('extrajs')
    <script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(event) {
                event.preventDefault();

                // Mengambil data dari form
                var email = $('#email').val();
                var password = $('#password').val();

                // Mengirim data menggunakan AJAX
                $('#loading').show();
                $.ajax({
                    url: '{{ route('masuk') }}', // Ganti dengan URL yang sesuai
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        email: email,
                        password: password,
                    },
                    success: function(response) {
                        $('#loading').show();
                        // Tampilkan SweetAlert sukses
                        swal("Success!", response.message, "success").then(() => {
                            window.location.href = '{{ route('home') }}';
                        });
                    },
                    error: function(xhr) {
                        // Tampilkan SweetAlert error
                        swal("Error!", xhr.responseJSON.message ||
                            "Terjadi kesalahan saat login.", "error");
                    },
                    complete: function() {
                        $('#loading').hide();
                    }
                });
            });
        });
    </script>
@endsection
