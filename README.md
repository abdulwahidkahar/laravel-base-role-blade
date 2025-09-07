<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# Laravel Base Role Blade

🚀 A Laravel starter project with **Blade template** and **role-based access control** powered by [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission).  
Includes authentication, clean Blade UI, and user role management out of the box.

<p align="center">
  <img src="https://raw.githubusercontent.com/abdulwahidkahar/laravel-base-role-blade/master/public/preview.png" alt="Project Preview" width="100%">
</p>

---

## ✨ Features
- 🔑 Authentication (Laravel Breeze / Jetstream style)
- 👤 User & Role management (Admin, Pegawai, Viewer)
- 🎨 Blade-based clean layout
- ⚡ Ready-to-use CRUD boilerplate
- 🛡️ Role-based access control using Spatie Permission

---

## ⚙️ Installation

Clone the repo & install dependencies:

```bash
git clone https://github.com/abdulwahidkahar/laravel-base-role-blade.git
cd laravel-base-role-blade
composer install
npm install

cp .env.example .env
```bash
php artisan key:generate

```bash
php artisan migrate --seed

```bash
php artisan serve

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
