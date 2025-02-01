@extends('layouts.master');
@section('extracss')
    <style>
        body {
            background-color: #e7f1ff;
            /* Warna latar belakang biru muda */
        }

        .register-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
@endsection
@section('content')
    <div class="register-container">
        <h2 class="text-center">Daftar</h2>
        <form action="#" id="register-form">
            @csrf
            <input type="hidden" name="kode" id="kode">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password"
                    required>
                <div class="error" id="passwordError"></div>
            </div>
            <div class="mb-3">
                <label for="role">Pilih Role:</label>
                <select id="role" name="role" required>
                    <option value="">--Pilih Role--</option>
                    <option value="customer">Customer</option>
                    <option value="consultant">Consultant</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="handphone" class="form-label">Handphone</label>
                <input type="text" class="form-control" id="handphone" name="handphone" placeholder="Masukkan Nomer Handphone" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Daftar</button>
            <div class="mt-3 text-center">
                <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
            </div>
        </form>
        <div id="responseMessage"></div>
    </div>
@endsection

@section('extrajs')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#register-form').on('submit', function(event) {
                event.preventDefault();

                // Mengambil nilai dari input
                var name = $('#name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var confirmPassword = $('#confirm_password').val();
                var role = $('#role').val();
                var phone = $('#handphone').val();

                // Validasi konfirmasi password
                if (password !== confirmPassword) {
                    $('#passwordError').text('Password dan konfirmasi password tidak cocok.');
                    return;
                } else {
                    $('#passwordError').text('');
                }

                // Mengirim data menggunakan AJAX
                $('#loading').show();
                $.ajax({
                    type: 'POST',
                    url: `{{ route('daftar') }}`,
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}',
                        name,
                        email,
                        password,
                        role,
                        phone
                    },
                    success: function(r) {
                        swal("Success!", r, "success").then((value) => {
                            window.location.href = '{{ route('login') }}';
                        });
                    },
                    error: function(e) {
                        console.log(e);
                        swal("Warning!", e.responseJSON, "warning");
                    },
                    complete: function() {
                        $('#loading').hide();
                    }
                });
            });
        });
    </script>
@endsection
