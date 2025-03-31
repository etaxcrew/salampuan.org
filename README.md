<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Salampuan.org

Salampuan.org adalah sebuah aplikasi berbasis web yang dikembangkan menggunakan Laravel. Aplikasi ini bertujuan untuk menyediakan layanan dan informasi secara online.

## Requirements

Sebelum menginstal dan menjalankan proyek ini, pastikan Anda telah memenuhi persyaratan berikut:

- PHP 7.4 atau lebih baru
- Composer
- Laravel 11
- MySQL atau database lain yang kompatibel
- Node.js (untuk pengelolaan frontend jika diperlukan)
- Nginx atau Apache sebagai web server

## Installation

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini di lingkungan lokal:

1. Clone the repository:
   ```
   git clone https://github.com/username/salampuan.org.git
   cd salampuan.org
   ```

2. Install dependencies:
   ```
   composer install
   npm install
   ```

3. Set up environment:
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Edit file `.env` untuk menyesuaikan dengan konfigurasi database Anda:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=gorontalohosting_salampuan
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   
5. Migrasi database dan seeding data
   ```
   php artisan migrate --seed
   ```

6. Jalankan aplikasi
   ```
   php artisan serve
   ```

## Features

- Manajemen pengguna dengan Laravel Fortify
- Manajemen peran dan izin dengan Spatie Permission
- Pengelolaan berita dan galeri
- Dukungan frontend modern dengan FancyBox untuk tampilan galeri

## Kontribusi

Jika ingin berkontribusi dalam pengembangan proyek ini, silakan buat pull request atau diskusikan melalui issues di GitHub.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
