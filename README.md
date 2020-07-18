<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

> laravel2020-B-G3
##   SISTEM INFORMASI PENDAKIAN GUNUNG SLAMET (SIPGUS)

## Anggota Kelompok

- 17090034 Dendy Jordan Wijaya
- 17090051 Desi Ayu Purwono
- 17090058 Hera
- 17090122 Ianatul Khoeriyah

## CARA INSTALL

- Klik Clone or Download silahkan download zip
- Pindah kedalam folder /xampp/htdocs dan extrak 
- Ketikan " composer install "
-   Ubah nama file .env.example menjadi .env
-   Isi nama database
-   Kembali ke cmd lalu ketik php artisan key:generate
-   Lalu ketik kembali php artisan migrate --seed
-   Lalu ketik kembali php artisan storage:link
-   Untuk menjalankan ketik php artisan serve

### UPDATE :
 Untuk menjalankan fitur login forget password melalui email, isi kolom pada file .env.
 - MAIL_USERNAME="DI ISI EMAIL UNTUK SMTP"
 - MAIL_PASSWORD="DI ISI PASSWORD"
 - MAIL_FROM_ADDRESS="DI ISI EMAIL UNTUK SMTP"

#### PASTIKAN EMAIL YANG DIGUNAKAN SUDAH DI SETTING UNTUK SMTP!
 
 Untuk Social Login, isi kolom berikut pada file .env.
 - GITHUB_CLIENT_ID=null
 - GITHUB_CLIENT_SECRET=null
 - GITHUB_REDIRECT_URL=null

#### PASTIKAN SUDAH MEMBUAT OAuth APPS DI GITHUB

https://github.com/settings/developers 

<hr>

## Final Exam Task Check ( RAMPUNG )

### 8th Homework: Migration & Seeding

☑ 1. Migration for ALL TABLES.

☑ 2. Seeding for ALL TABLES.

☑ 3. Seeding at least 25 rows per Tables.


### 9th Homework: Authentication

☑ 1. Registration

☑ 2. Email Verification

☑ 3. Login

☑ 4. Logout

☑ 5. Change Password

☑ 6. Forgot Password


### 10th Homework - File Upload

> ### A. Image Upload

☑ 1. Image upload in Create Page in every CRUD. Only JPEG, JPG, PNG, & GIF are allowed.

☑ 2. Image upload in Edit Page in every CRUD. Only JPEG, JPG, PNG, & GIF are allowed.

☑ 3. Show the uploaded image in Show Page in every CRUD.

☑ 4. Show the uploaded image in Edit Page in every CRUD.

☑ 5. Save the image in storage/app/public !


> ### B. PDF Upload

☑ 1. PDF upload in Create Page in every CRUD. Only PDF are allowed.

☑ 2. PDF upload in Edit Page in every CRUD. Only PDF are allowed.

☑ 3. Show link of the uploaded PDF in Show Page in every CRUD.

☑ 4. Show link of the uploaded PDF in Edit Page in every CRUD.

☑ 5. Save the PDF in storage/app/public !


☑ Note:

Do that in every CRUD! Both Image & PDF!

Save the file in storage/app/public


### 11th Homework - Other Topic.

☑ - Social Login. **( GITHUB )**

https://laravel.com/docs/7.x/socialite
