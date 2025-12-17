# RumahWebTest App – REST API

Aplikasi **REST API berbasis Laravel 10/11** yang dikembangkan untuk kebutuhan **technical test, pembelajaran, dan implementasi best practice API** menggunakan Laravel. API ini berfokus pada autentikasi, keamanan, dan struktur kode yang bersih serta scalable.

---

## 🚀 Fitur Utama

* REST API berbasis JSON
* Autentikasi menggunakan **Laravel Sanctum**
* Login, Register, Logout API
* Proteksi endpoint menggunakan middleware `auth:sanctum`
* Validasi request terpusat
* Repository Pattern
* Rate Limiting API
* Response standar & konsisten
* Struktur project siap dikembangkan

---

## 🧰 Teknologi yang Digunakan

* PHP >= 8.1
* Laravel 10 / 11
* MySQL / MariaDB
* Laravel Sanctum
* Composer
* Postman / Insomnia (untuk testing API)

---

## ⚙️ Instalasi Project

### 1. Clone Repository

```bash
git clone https://github.com/chandrakarim/rumahwebtest.git
cd rumahwebtest-api
```

### 2. Install Dependency

```bash
composer install
```

### 3. Konfigurasi Environment

```bash
cp .env.example .env
php artisan key:generate
```

Atur database pada file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rumahwebtest_api
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Migrasi Database

```bash
php artisan migrate
```

### 5. Install Sanctum

```bash
php artisan vendor:publish --provider="Laravel\\Sanctum\\SanctumServiceProvider"
php artisan migrate
```

### 6. Jalankan Server

```bash
php artisan serve
```

Base URL:

```
http://localhost:8000/api
```

---

## 🔐 Autentikasi (Sanctum)

API ini menggunakan **token-based authentication**.

### Register

**Endpoint**

```
POST /api/register
```

**Request Body (JSON)**

```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password",
  "password_confirmation": "password"
}
```

---

### Login

**Endpoint**

```
POST /api/login
```

**Request Body (JSON)**

```json
{
  "email": "john@example.com",
  "password": "password"
}
```

**Response**

```json
{
  "token": "1|xxxxxxxxxxxxxxxx"
}
```

---

### Get Authenticated User

**Endpoint**

```
GET /api/me
```

**Headers**

```
Authorization: Bearer {token}
```

---

### Logout

**Endpoint**

```
POST /api/logout
```

**Headers**

```
Authorization: Bearer {token}
```

> Logout menggunakan **POST**, bukan GET, karena termasuk aksi yang mengubah state (invalidate token).

---

## 🛡️ Keamanan API

* Laravel Sanctum untuk token management
* Rate Limiting (`throttle:api`)
* Validasi request menggunakan Form Request
* Password di-hash menggunakan bcrypt
* CSRF tidak digunakan untuk API token

---

## 📦 Struktur Folder Penting

```
app/
 ├── Http/Controllers/API
 │    └── AuthController.php
 ├── Http/Requests
 ├── Repositories
 │    ├── UserRepository.php
 │    └── Interfaces
 ├── Models
routes/
 ├── api.php
```

---

## 📑 Contoh Route API (`routes/api.php`)

```php
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/me', [AuthController::class, 'me']);
        Route::post('/logout', [AuthController::class, 'logout']);
    });
});
```

---

## 🧪 Testing API

* Gunakan **Postman / Insomnia**
* Pastikan Header `Accept: application/json`
* Simpan token setelah login

---

## 📝 Catatan Penting

* Jangan gunakan method GET untuk logout
* Pastikan `.env` tidak di-commit
* Gunakan HTTPS di production
* Atur `SANCTUM_STATEFUL_DOMAINS` jika digunakan dengan frontend

---

## 📄 Lisensi

Proyek ini dibuat untuk keperluan **technical test dan pembelajaran**.

---

**RumahWebTest App API – Clean Architecture, Secure, dan Siap Produksi.**
