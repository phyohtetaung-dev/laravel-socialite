# Social Authentication with Laravel Socialite

## Requirements
**php >= 8.1**

## Installation
```
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
```

## Config Env
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3360
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

GITHUB_CLIENT_ID=${YOUR_GITHUB_CLIENT_ID}
GITHUB_CLIENT_SECRET=${YOUR_GITHUB_CLIENT_SECRET}

FACEBOOK_CLIENT_ID=${YOUR_FACEBOOK_CLIENT_ID}
FACEBOOK_CLIENT_SECRET=${YOUR_FACEBOOK_CLIENT_SECRET}

GOOGLE_CLIENT_ID=${YOUR_GOOGLE_CLIENT_ID}
GOOGLE_CLIENT_SECRET=${YOUR_GOOGLE_CLIENT_SECRET}
```
**If app is not running on port 8000, modified "redirect" value in config/services.php for each provider.**

## Migrate DB
```
php artisan migrate
```
