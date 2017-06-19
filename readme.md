# AirlanggaAcademic
Project Pengembangan Sistem Informasi 2017

## Requirements:
* [XAMPP](https://www.apachefriends.org/download.html) (atau tool lain, dengan versi PHP minimal 5.6.4.) 
* [Composer](https://getcomposer.org/)


## Installation:
[Clone this repo](https://github.com/AirlanggaAcademicIS/AirlanggaAcademic.git)

Setelah itu run command berikut di cmd direktori repo tadi
```bash
composer install
```

Import database airlangga_academic.sql ke phpmyadmin (filenya ada di dalam repo tadi)

Buat file baru bernama .env

Copy paste isi dari .env.example ke .env tadi, kemudian atur konfigurasi username dan password database di .env

```php
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
```

Setelah itu jalankan command ini di cmd
```bash
php artisan key:generate
```

Dan terakhir jalankan aplikasi ini dengan command
```bash
php artisan serve
```

* Untuk melihat hasilnya di browser gunakan "localhost:8000"


Good Luck, Have Fun 

[Coding for Purpose]