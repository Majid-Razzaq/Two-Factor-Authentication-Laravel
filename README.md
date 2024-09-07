<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requirements
- Laravel 11
- PHP 8.1
- Composer 2.x

## Getting Started
- Clone the repository.
- Run composer install to install dependencies.
- Change the .env.example to .env and add your database info
- Set up your database configuration in the .env file.
- Run php artisan migrate to set up the necessary tables.
- Install the required package for Google2FA.
- Publish the package configuration.
- Implement and customize as needed.

```javascript
composer install
```

```javascript
php artisan migrate
```

```javascript
composer require pragmarx/google2fa-laravel
```

```javascript
php artisan vendor:publish --provider="PragmaRX\Google2FALaravel\ServiceProvider"
```

```javascript
npm install
```

```javascript
npm run dev
```

```javascript
php artisan serve
```
