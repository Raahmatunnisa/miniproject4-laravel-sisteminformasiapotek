# SISTEM INFORMASI APOTEK

**Nama:** Rahmatun Nisa  
**NIM:** 2308107010016

## Deskripsi Singkat Aplikasi

Aplikasi ini merupakan sistem informasi untuk Apotek berbasis web yang dibangun menggunakan Laravel 11. Aplikasi ini memiliki fitur pengelolaan produk obat, transaksi penjualan, laporan penjualan, serta manajemen kategori dan pelanggan.

### Struktur dan Penjelasan Kode

- **Controllers (`app/Http/Controllers`)**
  - `CategoryController.php` – Mengatur logika untuk CRUD kategori obat.
  - `CustomerController.php` – Mengelola data pelanggan apotek.
  - `DashboardController.php` – Menampilkan ringkasan data di dashboard.
  - `ProductController.php` – Mengatur logika untuk CRUD produk obat.
  - `ReportController.php` – Menangani pembuatan dan tampilan laporan penjualan.
  - `TransactionController.php` – Mengelola proses transaksi penjualan.
  
- **Models (`app/Models`)**
  - `Category.php`, `Customer.php`, `Product.php`, `Transaction.php`.

- **Views**
  - Berada di `resources/views` file `AppLayout.php` menunjukkan penggunaan komponen Blade untuk antarmuka.


### User Interface

Tampilan antarmuka menggunakan komponen Blade dengan layout yang konsisten (`AppLayout`). Setiap halaman seperti daftar produk, form transaksi, laporan, dan dashboard dapat diakses melalui menu navigasi. UI dirancang sederhana dan fungsional untuk operasional kasir di apotek.

## Cara Instalasi Aplikasi

Berikut adalah langkah-langkah untuk menjalankan aplikasi ini di lokal:

1. **Clone Repository**
   ```bash
   git clone <URL_REPO_KAMU>
   cd aplikasi-pos-apotek-laravel11

2. **Install Dependency**
   ```
   composer install
   npm install && npm run dev

3. **Copy dan Konfigurasi File Environment**
   ```
   cp .env.example .env
   php artisan key:generate

4. **Migrasi dan Seed Database**
   ```
   php artisan migrate
   php artisan db:seed

5. **Jalankan Server**
   ```
   php artisan serve

6. **Akses Aplikasi**
   ```Buka browser dan akses
   http://localhost:8000


 
