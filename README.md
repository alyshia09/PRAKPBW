### LaraPress - Aplikasi Blog Sederhana ###

LaraPress adalah aplikasi blog sederhaana yang dibuat dengan Laravel 12
Proyek ini dibuat untuk tujuan pembelajaran dan pengembangan keterampilan

<img width="888" height="433" alt="image" src="https://github.com/user-attachments/assets/177d1233-70a7-4f43-ae14-1eb18a78320f" />

Halaman Utama LaraPress

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


