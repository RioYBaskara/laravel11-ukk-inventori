## Sistem Manajemen Inventaris dengan Laravel 11

Projek ini adalah Sistem Manajemen Inventaris yang dibangun dengan menggunakan Laravel 11. Terdapat lima tabel utama: `Kategori`, `Barang`, `BarangMasuk`, dan `BarangKeluar`.

### Foto
- ![image](https://github.com/RioYBaskara/laravel11-ukk-inventori/assets/156874101/49e2ba61-bbc2-462b-814d-187439abbca1)
- ![image](https://github.com/RioYBaskara/laravel11-ukk-inventori/assets/156874101/8f54eee6-1abb-4b5a-adbc-744cd5345d37)
- ![image](https://github.com/RioYBaskara/laravel11-ukk-inventori/assets/156874101/f3e9edad-90fb-4454-ae40-65a36d3b09b9)
- ![image](https://github.com/RioYBaskara/laravel11-ukk-inventori/assets/156874101/5b807338-c3ef-4e2f-b892-921b45189f92)
- ![image](https://github.com/RioYBaskara/laravel11-ukk-inventori/assets/156874101/e76b4289-d39b-4fac-9061-e2915c34f5e8)
- ![image](https://github.com/RioYBaskara/laravel11-ukk-inventori/assets/156874101/eb01bdc2-013c-499a-bfea-13d74f995ba5)


### Fitur

1. **Autentikasi Pengguna**: Pengguna dapat melakukan autentikasi untuk mengakses sistem.
2. **Referential Integrity**: Menjaga integritas data dengan menerapkan konstrain integritas referensial antar tabel terkait.
3. **Triggers**: Menggunakan trigger untuk melakukan tindakan otomatis saat terjadi suatu peristiwa di database.
4. **Operasi CRUD**: Mendukung operasi CRUD (Create, Read, Update, Delete) untuk mengelola data dengan efektif.
5. **API untuk Tabel Kategori**: Menyediakan API untuk data dalam tabel `Kategori`.
6. **Store Function dan Stored Procedure**: Memanfaatkan store function dan stored procedure untuk melakukan operasi kompleks di database.
7. **Pencarian Data**: Menyediakan fitur pencarian untuk memudahkan pengguna dalam menemukan data yang dibutuhkan.

### Template

Projek ini menggunakan template [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) untuk desain antarmuka pengguna.

### Clone Repositori

Untuk meng-clone repositori ini, ikuti langkah-langkah berikut:

1. Pastikan Git sudah terinstal di komputer Anda.
2. Buka terminal atau command prompt.
3. Arahkan ke direktori tempat Anda ingin meng-clone repositori.
4. Jalankan perintah berikut:

```bash
https://github.com/RioYBaskara/laravel11-ukk-inventori.git
```

### Persyaratan

Sebelum menjalankan projek Laravel ini, pastikan Anda telah memenuhi persyaratan berikut:

1. **PHP**: Pastikan PHP sudah terinstal di sistem Anda. Anda dapat mengunduhnya dari [php.net](https://www.php.net/downloads).
2. **Composer**: Instal Composer, manajer dependensi untuk PHP, dari [getcomposer.org](https://getcomposer.org/download/).
3. **MySQL**: Siapkan server database MySQL. Anda dapat mengunduhnya dari [mysql.com](https://dev.mysql.com/downloads/).
4. **Laravel CLI**: Instal Laravel secara global menggunakan Composer:

```bash
composer global require laravel/installer
```

### Persiapan

Ikuti langkah-langkah berikut untuk menyiapkan projek:

1. **Clone Repositori**: Gunakan instruksi cloning yang disebutkan di atas.
2. **Instal Dependensi**: Arahkan ke direktori projek dan jalankan:

```bash
composer install
```

3. **Salin Variabel Lingkungan**: Duplikat file `.env.example` dan ganti namanya menjadi `.env`. Perbarui detail konfigurasi database (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD) di file ini.

```bash
cp .env.example .env
```

4. **Menghasilkan Kunci Aplikasi**: Jalankan perintah berikut untuk menghasilkan kunci aplikasi yang unik:

```bash
php artisan key:generate
```

5. **Jalankan Migrasi**: Jalankan perintah berikut untuk menjalankan semua migrasi yang tertunda:

```bash
php artisan migrate
```

6. **Jalankan Aplikasi**: Terakhir, jalankan server pengembangan Laravel:

```bash
php artisan serve
```

Akses aplikasi melalui web browser Anda

Jangan lupa Bismillah.

### API untuk Tabel Kategori

- **GET** .../api/kategori: Mendapatkan daftar semua data kategori.
- **GET** .../api/kategori/{kategori_id}: Mendapatkan detail kategori berdasarkan ID.
- **POST** .../api/kategori: Menambahkan kategori baru.
- **PUT** .../api/kategori/{kategori_id}: Memperbarui detail kategori berdasarkan ID.
- **DELETE** .../api/kategori/{kategori_id}: Menghapus kategori berdasarkan ID.
