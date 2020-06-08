> laravel2020-B-G3
# Sistem Informasi Pendakian Gunung Slamet

### Anggota Kelompok :

- 17090034 Dendy Jordan Wijaya
- 17090051 Desi Ayu Purwono
- 17090058 Hera
- 17090122 Ianatul Khoeriyah

#### Instalasi :
 1. Klik Clone or Download silahkan download zip
 2. Pindah kedalam folder /xampp/htdocs dan extrak 
 3. Buka _comandline_, arahkan ke folder projek dengan ketik
  " cd /xampp/htdocs/laravel2020-B-G3 "
 4. Ketikan " composer install "
 5. Ubah nama file .env.example menjadi .env
 6. Isi nama database, kemudian buat database di localhost/phpmyadmin sesuaikan dengan nama database pada file .env.
 7. Kembali ke cmd lalu ketik php artisan key:generate (masih didalam folder laravel2020-B-G3)
 8. Lalu ketik kembali php artisan migrate --seed
 9. Untuk menjalankan ketik php artisan serve

 ### UPDATE :
 Untuk menjalankan fitur login forget password melalui email, isi kolom pada file .env.
 - MAIL_USERNAME="DI ISI EMAIL UNTUK SMTP"
 - MAIL_PASSWORD="DI ISI PASSWORD"
 - MAIL_FROM_ADDRESS="DI ISI EMAIL UNTUK SMTP"
 
 #### PASTIKAN EMAIL YANG DIGUNAKAN SUDAH DI SETTING UNTUK SMTP!

### Catatan :
- Untuk membuka/berpindah page dari page regus, jalurs, dan perlengkapans diwajibkan untuk menghapus kuki (cookies),
  terlebih dahulu menggunakan shortkey Ctrl + Shift + Del kemudian Enter. Ini merupakan bug session, karena website
  ini dibangun dari awal (native) dan tanpa template. Bug akan segera diperbaiki secepatnya setelah kelompok kami
  menemukan solusinya. Mohon pengertiannya, terimakasih~

# Demo
http://laravel-b3.tegalian.com

tester1@mailinator.com : 123456
