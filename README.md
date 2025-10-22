# 🏠 REST API Laravel - RumahWebTest

[![PHP Version](https://img.shields.io/badge/PHP-10+-blue)](https://www.php.net/)
[![Laravel Version](https://img.shields.io/badge/Laravel-10+-green)](https://laravel.com/)
[![License](https://img.shields.io/badge/License-MIT-yellow)](LICENSE)

---

## 📦 Prasyarat

Sebelum memulai, pastikan Anda telah menginstal:

* **PHP ≥ 10**
* **Composer**
* **Git**
* **Postman**

---

## 🚀 Instalasi

1. **Kloning repositori:**

```bash
git clone https://github.com/chandrakarim/rumahwebtest.git
cd rumahwebtest
```

2. **Instal dependensi:**

```bash
composer install
```

3. **Salin file konfigurasi:**

```bash
cp .env.example .env
```

4. **Generate key aplikasi:**

```bash
php artisan key:generate
```

5. **Konfigurasi database** (`.env`):

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_rumahweb
DB_USERNAME=root
DB_PASSWORD=
```

6. **Jalankan migrasi dan seeder:**

```bash
php artisan migrate --seed
```

7. **Jalankan server pengembangan:**

```bash
php artisan serve
```

Akses aplikasi: [http://localhost:8000](http://localhost:8000)

---

## 🧪 Pengujian API dengan Postman

### 1. Impor Koleksi

* Unduh koleksi Postman dari repositori.
* Buka Postman → klik **Import** → unggah file koleksi.

### 2. Konfigurasi Lingkungan

| Variabel    | Contoh Nilai                | Keterangan                |
| ----------- | --------------------------- | ------------------------- |
| `baseUrl`   | `http://localhost:8000/api` | URL dasar API             |
| `authToken` | `Bearer <token>` (opsional) | Token otentikasi jika ada |

### 3. Jalankan Pengujian

* Pilih koleksi yang telah diimpor
* Klik **Run** → pilih environment → mulai pengujian

---

## 🔐 Autentikasi

Jika endpoint menggunakan autentikasi:

1. Pilih tab **Authorization** di Postman
2. Setel **Type** → `Bearer Token`
3. Masukkan token yang valid

---

## 🧾 Endpoint API

| Method | Endpoint          | Deskripsi                            |
| ------ | ----------------- | ------------------------------------ |
| GET    | `/api/users`      | Mengambil daftar user                |
| POST   | `/api/users`      | Menambahkan user baru                |
| GET    | `/api/users/{id}` | Mengambil detail user berdasarkan ID |
| PUT    | `/api/users/{id}` | Memperbarui user berdasarkan ID      |
| DELETE | `/api/users/{id}` | Menghapus user berdasarkan ID        |

> Setiap endpoint dilengkapi deskripsi, parameter, dan contoh respons di koleksi Postman.

---

## 📚 Sumber Daya Tambahan

* [Laravel Documentation](https://laravel.com/docs)
* [Postman API Testing Guide](https://learning.postman.com/docs/getting-started/introduction/)
* [Generate API Docs dengan Postman](https://medium.com/@kalebalebachew4/generate-postman-docs-for-your-laravel-api-in-minutes-2beab126c52c)

---

## ⚡ License

MIT License © 2025
