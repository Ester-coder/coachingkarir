@extends('layouts.app')
@section('extracss')
    <style>
        .logo {
            width: 30px;
            margin-right: 10px;
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        .header-text {
            max-width: 50%;
        }
        .header-image {
            max-width: 45%;
        }
        .header-image img {
            width: 80%;
            height: auto;
        }
        .footer {
            margin-top: auto;
        }
    </style>
@endsection

<header class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('./images/logo.png') }}" alt="Logo" class="logo">
                Coach Wise
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="header-content">
    <div class="header-text">
        <h1>Selamat Datang di Coach Wise</h1>
        <p>"Mendampingi Perjalanan Anda Menuju Keberhasilan".</p>
        <small>
            Coach Wise adalah platform pengembangan diri yang berfokus 
            pada pemberian bimbingan dan dukungan kepada individu dalam 
            mencapai potensi penuh mereka. Dengan pendekatan yang holistik 
            dan berbasis pada pengalaman, Coach Wise menyediakan berbagai 
            program pelatihan, workshop, dan sesi coaching pribadi yang 
            dirancang untuk membantu klien mengatasi tantangan, mengembangkan 
            keterampilan, dan meraih tujuan hidup mereka. Kami percaya bahwa 
            setiap orang memiliki kemampuan untuk tumbuh dan berkembang, dan 
            kami ada untuk mendampingi mereka dalam perjalanan tersebut.
        </small>
        <br>
        <br>
        <a href="#" class="btn btn-primary" style="background-color: #0091c1; border-color: #add8e6; color: white;">Mulai</a>
    </div>
    <div class="header-image">
        <img src="{{ asset('images/landingpage.jpg') }}" alt="Landing Page Image">
    </div>
</div>

<div class="benefits-section" style="background-color: #a3e6fc; padding: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <i class="fas fa-chalkboard-teacher fa-3x"></i>
                <h4>Pelatihan Profesional</h4>
                <p>Program pelatihan yang dirancang oleh para ahli di bidangnya.</p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-users fa-3x"></i>
                <h4>Komunitas Supportive</h4>
                <p>Bergabung dengan komunitas yang mendukung perkembangan Anda.</p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-user-tie fa-3x"></i>
                <h4>Coaching Pribadi</h4>
                <p>Sesi coaching pribadi untuk membantu Anda mencapai tujuan.</p>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-award fa-3x"></i>
                <h4>Penghargaan dan Sertifikasi</h4>
                <p>Dapatkan sertifikasi dan penghargaan atas pencapaian Anda.</p>
            </div>
        </div>
    </div>
</div>

<div class="showcase-services-section" style="background-color: #f8f9fa; padding: 40px 0;">
    <div class="container">
        <h2 class="text-center mb-4">Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fas fa-briefcase fa-3x mb-3"></i>
                <h4>Konsultasi Karir</h4>
                <p>Konsultasi karir untuk membantu Anda menemukan jalur karir yang tepat.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-book-open fa-3x mb-3"></i>
                <h4>Pelatihan Keterampilan</h4>
                <p>Pelatihan keterampilan untuk meningkatkan kemampuan profesional Anda.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-handshake fa-3x mb-3"></i>
                <h4>Mentoring</h4>
                <p>Mentoring untuk memberikan bimbingan dan dukungan dalam perjalanan karir Anda.</p>
            </div>
        </div>
    </div>
</div>

<div class="showcase-coach-section" style="background-color: #a3e6fc; padding: 40px 0;">
    <div class="container">
        <h2 class="text-center mb-4">Coach Terbaik Kami</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/coach1.jpg') }}" alt="Coach 1" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                <h4>Johan</h4>
                <p>Rating: ⭐⭐⭐⭐⭐</p>
                <p>"Coach Johan adalah coach yang luar biasa! Dia membantu saya mencapai tujuan karir saya dengan cara yang sangat efektif."</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/coach2.jpg') }}" alt="Coach 2" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                <h4>Jane</h4>
                <p>Rating: ⭐⭐⭐⭐⭐</p>
                <p>"Coach Jane sangat mendukung dan memberikan banyak wawasan berharga. Saya sangat merekomendasikan dia!"</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/coach3.jpg') }}" alt="Coach 3" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                <h4>Rizky</h4>
                <p>Rating: ⭐⭐⭐⭐⭐</p>
                <p>"Coach Rizky memiliki pendekatan yang sangat profesional dan membantu saya mengembangkan keterampilan baru."</p>
            </div>
        </div>
    </div>
</div>

<footer class="bg-light text-center py-3" style="position: relative; bottom: 0; width: 100%;">
    <div class="container">
        <p>&copy; 2025 Coach Wise. All rights reserved.</p>
    </div>
</footer>
@extends('layouts.footer')
