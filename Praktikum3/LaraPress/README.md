<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
### LaraPress - Aplikasi Blog Sederhana ###

LaraPress adalah aplikasi blog sederhaana yang dibuat dengan Laravel 12
Proyek ini dibuat untuk tujuan pembelajaran dan pengembangan keterampilan

<img width="1031" height="572" alt="image" src="https://github.com/user-attachments/assets/c09ce8f6-1216-4c92-8b90-959c356be431" />


Halaman Utama LaraPress

<img width="1028" height="450" alt="image" src="https://github.com/user-attachments/assets/b397483c-f500-4f57-ba64-2e3355d9703c" />

Halaman Tentang Kami

<img width="1028" height="503" alt="image" src="https://github.com/user-attachments/assets/aec31c4d-87b5-433c-9d5a-8f83b0ba3ccf" />

Halaman Kontak Kami


### Tujuan ###
1. Memahami alur kerja Laravel (request → routing → controller → view → response)

2. Menginstal Laravel dengan benar

3. Membuat routing, controller, dan view sederhana

4. Berinteraksi dengan database (CRUD dasar)

5. Mengenal struktur direktori Laravel dan fungsinya

### Fitur yang sudah diimplementasikan ###
1. Halaman Utama
   - Mengubah tampilan default Laravel menjadi halaman sederhana
   - Menampilkan judul "Selamat Datang di LaraPress"
   - Struktur HTML yang bersih dan minimal

2. Halaman Tentang Kami
- Route: /tentang-kami
- Menampilkan informasi tentang LaraPress
- Menjelaskan tujuan proyek sebagai pembelajaran Laravel 12

3. Halaman Kontak Kami
   - Route : /Kontak-kami
   - Menampilkan informasi berupa no. telp, email dan alamat

### Struktur File Yang dibuat dan Modifikasi ###
1. resources/views/welcome.blade.php
   - Mengubah tampilan default Laravel yang kompleks menjadi struktur HTML sederhana
   - Menampilkan pesan sambutan untuk pengunjung blog

2. resources/views/about.blade.php (BARU)
   - File view baru untuk halaman "Tentang Kami"
   - Berisi informasi tentang LaraPress sebagai proyek pembelajaran

3. routes/web.php
   - Menambahkan route baru /tentang-kami yang mengarah ke view about.blade.php

4. resources/views/contact.blade.php
   - file view baru untuk halaman "Kontak kami"
   - berisi informasi alamat, no.telp dan email

### Langkah - Langkah Implementasi ###
1. Modifikasi Halaman Utama
   <!DOCTYPE html>
<html>
<head>
    <title>Blog LaraPress</title>
    <style>
        body {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(90deg, #ff5f9e, #ec4899);
            color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 100px;
            font-size: 36px;
        }

        p {
            margin-top: 10px;
            font-size: 18px;
        }

        .button-container {
            margin-top: 20px;
        }

        .btn-link {
            display: inline-block;
            padding: 12px 20px;
            margin: 10px;
            border-radius: 8px;
            text-decoration: none;
            background-color: #fdfce8;
            color: black;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-link:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Blog LaraPress</h1>
    <p>Ini adalah halaman utama dari aplikasi blog kita.</p>

    <div class="button-container">
        <a href="/tentang-kami" class="btn-link">Tentang Kami</a>
        <a href="/Kontak-kami" class="btn-link">Hubungi Kami</a>
    </div>
</body>
</html>

2. Membuat Route Baru
   <?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view('welcome');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/Kontak-kami', function () {
    return view('contact');
});

3. Membuat View About
   <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - LaraPress</title>
    <style>
        body {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(90deg, #ff5f9e, #ec4899);
            color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 100px;
            font-size: 36px;
        }

        p {
            margin-top: 10px;
            font-size: 18px;
        }

        .button-container {
            margin-top: 20px;
        }

        .btn-link {
            display: inline-block;
            padding: 12px 20px;
            margin: 10px;
            border-radius: 8px;
            text-decoration: none;
            background-color: #fdfce8;
            color: black;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-link:hover {
            background-color: #2563eb;
        }
    </style> 
</head>
<body>
    <h1>Tentang LaraPress</h1>
    <p>LaraPress adalah aplikasi blog sederhana yang dibuat dengan Laravel 12.</p>
    <p>Proyek ini dibuat untuk tujuan pembelajaran dan pengembangan keterampilan.</p>

    <div class="button-container">
        <a href="/" class="btn-link">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>

4. Membuat View Welcome
   <!DOCTYPE html>
<html>
<head>
    <title>Blog LaraPress</title>
    <style>
        body {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(90deg, #ff5f9e, #ec4899);
            color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 100px;
            font-size: 36px;
        }

        p {
            margin-top: 10px;
            font-size: 18px;
        }

        .button-container {
            margin-top: 20px;
        }

        .btn-link {
            display: inline-block;
            padding: 12px 20px;
            margin: 10px;
            border-radius: 8px;
            text-decoration: none;
            background-color: #fdfce8;
            color: black;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-link:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Blog LaraPress</h1>
    <p>Ini adalah halaman utama dari aplikasi blog kita.</p>

    <div class="button-container">
        <a href="/tentang-kami" class="btn-link">Tentang Kami</a>
        <a href="/Kontak-kami" class="btn-link">Hubungi Kami</a>
    </div>
</body>
</html>

5. Membuat View Kontak
   <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - LaraPress</title>
    <style>
        body {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(90deg, #ff5f9e, #ec4899);
            color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 100px;
            font-size: 36px;
        }

        p {
            margin-top: 10px;
            font-size: 18px;
        }

        .button-container {
            margin-top: 20px;
        }

        .btn-link {
            display: inline-block;
            padding: 12px 20px;
            margin: 10px;
            border-radius: 8px;
            text-decoration: none;
            background-color: #fdfce8;
            color: black;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-link:hover {
            background-color: #2563eb;
        }
    </style> 
</head>
<body>
    <h1>Kontak Kami</h1>
    <p>Hubungi Kami Jika terjadi keluhan atau ingin berkaloborasi bersama.</p>
    <ul>
        <li> Email       : alyshia21@gmail.com </li> 
        <li> No. Telepon : 081212186462 </li>
        <li> Alamat      : Jl. Squadron </li>
        <li> Instagram   : @LaraPress_ </li>
    </ul>

    <div class="button-container">
        <a href="/" class="btn-link">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>


>>>>>>> 0a43487419875010279068c6b4393cf84126a5ee
