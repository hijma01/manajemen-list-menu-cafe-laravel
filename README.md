# CRUD manajemen list menu cafe 

Proyek ini adalah aplikasi web berbasis **Laravel** yang dibuat untuk memanage tentang apa saja list menu dicafe dengan menggunakan fitur tambah,edit dan hapus. Aplikasi ini dirancang untuk mempermudah admin dalam mengatur dan mengelola daftar-daftar menu di cafe.
Dibangun menggunakan Laravel versi 12 dengan database MySQL.


## Fitur 

- Create: menambahkan list menu yang diinginkan  ke daftar menu
- Update: mengedit list menu yang ingin diubah
- Delete: menghapus list menu yang tidak diinginkan untuk di jual lagi
- Read:  menampilkan seluruh list menu cafe tersebut

## Teknologi yang Digunakan

PHP = 8.3 
Laravel = 12 
MySQL = 8.2 
Composer = 2.4
Node.js = 22.2 

## Cara Membuat Proyek Laravel

### 1. Install Laravel via Composer

```bash
composer create-project laravel/laravel12 nama-project
```
### 2. Buat Database di MySQL
   
Masuk ke MySQL dan buat database baru:

```sql
mysql -u root -p

CREATE DATABASE nama_database;
EXIT;
```

### 3. Konfigurasi File `.env`

Buka file `.env` di root proyek dan sesuaikan pengaturan database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=listmenucafe
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Jalankan Migrasi Database

Buat semua tabel yang diperlukan dengan perintah:

```bash
php artisan migrate
```

### 5. Jalankan diterminal
```bash
php artisan make:model listmenucafe -mc --resource
```
### 6. Membuka file 'database\migration\listmenucaves'

```bash
 $table->id();
            $table->string('nama_menu');
            $table->string('kategori');
            $table->integer('harga');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
```
Jalankan diterminal:

```bash
php artisan migrate 
```

### 7. mebuka file 'route\web' dan tambahkan:

```bash
route::resource('listmenucafe',listmenucafe controller::class); 
```
setelah itu periksa diterminal apakah sudah berhasil dijalankan

```bash
php artisan migrate  route:list; 
```

### 8.buka file 'app\model\listmenucaves' dan tambahkan:

```bash
protected $guarded = [];
```
## cara menjalankan projectnya
jalankan:
```bash
php artisan serve
```
Aplikasi akan berjalan di: **http://127.0.0.1:8000/listmenucafe**



