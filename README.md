<div align="center">

# 🏫 Sistem Informasi Sekolah

**Aplikasi manajemen data sekolah berbasis web yang modern dan mudah digunakan**

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)](https://jquery.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)](LICENSE)

</div>

---

## 📋 Daftar Isi

- [Tentang Proyek](#-tentang-proyek)
- [Fitur Utama](#-fitur-utama)
- [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
- [Tampilan Aplikasi](#-tampilan-aplikasi)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Konfigurasi Database](#-konfigurasi-database)
- [Cara Penggunaan](#-cara-penggunaan)
- [Struktur Proyek](#-struktur-proyek)
- [Kontribusi](#-kontribusi)
- [Lisensi](#-lisensi)
- [Kontak](#-kontak)

---

## 🎯 Tentang Proyek

**Sistem Informasi Sekolah** adalah aplikasi manajemen data berbasis web yang dirancang untuk memudahkan pengelolaan data di lingkungan sekolah. Aplikasi ini memungkinkan admin sekolah untuk mengelola data siswa, guru, mata pelajaran, dan kelas secara terpusat dan efisien.

Dibangun menggunakan **PHP murni** dengan template **SB Admin 2** berbasis Bootstrap 4, aplikasi ini menyediakan antarmuka yang bersih, responsif, dan mudah digunakan oleh siapa saja.

---

## ✨ Fitur Utama

### 👨‍💼 Admin
| Fitur | Deskripsi |
|-------|-----------|
| 📊 **Dashboard** | Ringkasan statistik jumlah siswa, guru, mata pelajaran, dan kelas |
| 👨‍🎓 **Kelola Siswa** | Tambah, lihat, edit, dan hapus data siswa |
| 👨‍🏫 **Kelola Guru** | Tambah, lihat, edit, dan hapus data guru |
| 📚 **Kelola Mata Pelajaran** | Tambah, lihat, edit, dan hapus data mata pelajaran |
| 🏫 **Kelola Kelas** | Tambah, lihat, edit, dan hapus data kelas |

### 👨‍🎓 Siswa
| Fitur | Deskripsi |
|-------|-----------|
| 🔐 **Login & Register** | Masuk dan daftar akun menggunakan NISN |
| 📊 **Dashboard** | Melihat ringkasan data sekolah |
| 👁️ **Lihat Data** | Melihat daftar siswa, guru, mata pelajaran, dan kelas (hanya baca) |

### ⚙️ Fitur Teknis
- 🔍 **DataTables** — Pencarian, pengurutan, dan paginasi data otomatis
- 📱 **Responsif** — Tampilan optimal di desktop maupun perangkat mobile
- 🔐 **Session-based Auth** — Autentikasi berbasis sesi PHP
- 🎨 **UI Modern** — Menggunakan tema SB Admin 2 dengan Bootstrap 4

---

## 🛠️ Teknologi yang Digunakan

| Kategori | Teknologi | Versi |
|----------|-----------|-------|
| **Backend** | PHP | 7.4+ |
| **Database** | MySQL / MariaDB | 5.7+ |
| **Frontend Framework** | Bootstrap | 4.6.0 |
| **UI Template** | SB Admin 2 | 4.1.4 |
| **JavaScript** | jQuery | 3.6.0 |
| **Tabel Data** | DataTables | 1.10.24 |
| **Grafik** | Chart.js | 2.9.4 |
| **Ikon** | Font Awesome | 5.15.3 |
| **Build Tool** | Gulp | 4.0.2 |

---

## 🖼️ Tampilan Aplikasi

<div align="center">

### 🔐 Halaman Login
> Halaman masuk untuk admin dan siswa dengan tampilan yang bersih dan profesional

### 📊 Dashboard
> Ringkasan statistik data sekolah dengan kartu informasi yang informatif

### 👨‍🎓 Manajemen Siswa
> Tabel data siswa dengan fitur pencarian, pengurutan, dan CRUD lengkap

### 👨‍🏫 Manajemen Guru
> Tabel data guru dengan fitur pencarian, pengurutan, dan CRUD lengkap

</div>

---

## 💻 Persyaratan Sistem

Sebelum instalasi, pastikan sistem Anda memiliki:

- ✅ **PHP** versi 7.4 atau lebih baru
- ✅ **MySQL** / **MariaDB** versi 5.7 atau lebih baru
- ✅ **Web Server** Apache / Nginx (atau XAMPP / WAMP / MAMP)
- ✅ **Node.js** & **npm** (opsional, untuk build frontend)
- ✅ **Ekstensi PHP:** `mysqli`, `session`

---

## 🚀 Instalasi

### 1️⃣ Clone Repository

```bash
git clone https://github.com/nasrulaminmuis/sekolah.git
cd sekolah
```

### 2️⃣ Pindahkan ke Direktori Web Server

```bash
# Untuk XAMPP (Windows)
xcopy /E /I sekolah C:\xampp\htdocs\sekolah

# Untuk XAMPP (Linux/Mac)
cp -r sekolah /opt/lampp/htdocs/sekolah

# Untuk WAMP
xcopy /E /I sekolah C:\wamp\www\sekolah
```

### 3️⃣ Buat Database

Buka **phpMyAdmin** atau MySQL client, lalu jalankan SQL berikut:

> 💡 **Catatan:** Nama database `php-app` adalah nama default yang digunakan di file `koneksi.php`. Anda bisa mengubahnya sesuai kebutuhan, asalkan disesuaikan juga di file konfigurasi.

```sql
CREATE DATABASE `php-app` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `php-app`;

-- Tabel Kelas
CREATE TABLE `Kelas` (
  `KelasID` INT AUTO_INCREMENT PRIMARY KEY,
  `NamaKelas` VARCHAR(50) NOT NULL
);

-- Tabel Guru
CREATE TABLE `Guru` (
  `GuruID` VARCHAR(20) PRIMARY KEY,
  `Nama` VARCHAR(100) NOT NULL,
  `TanggalLahir` DATE,
  `JenisKelamin` ENUM('Laki-laki', 'Perempuan'),
  `Alamat` TEXT
);

-- Tabel Siswa
CREATE TABLE `Siswa` (
  `NISN` VARCHAR(20) PRIMARY KEY,
  `Nama` VARCHAR(100) NOT NULL,
  `TanggalLahir` DATE,
  `JenisKelamin` ENUM('Laki-laki', 'Perempuan'),
  `Alamat` TEXT,
  `KelasID` INT,
  FOREIGN KEY (`KelasID`) REFERENCES `Kelas`(`KelasID`)
);

-- Tabel Mata Pelajaran
CREATE TABLE `MataPelajaran` (
  `PelajaranID` INT AUTO_INCREMENT PRIMARY KEY,
  `NamaPelajaran` VARCHAR(100) NOT NULL
);

-- Tabel User (untuk login siswa)
CREATE TABLE `user` (
  `nis` VARCHAR(20) PRIMARY KEY,
  `pw` VARCHAR(255) NOT NULL
);
```

### 4️⃣ Konfigurasi Koneksi Database

Edit file `koneksi.php` sesuai dengan pengaturan database Anda:

```php
<?php
$host = 'localhost';   // Host database
$db   = 'php-app';    // Nama database
$user = 'root';       // Username MySQL
$pass = '';           // Password MySQL

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
```

### 5️⃣ Jalankan Aplikasi

Buka browser dan akses:

```
http://localhost/sekolah/
```

---

## 🔑 Cara Penggunaan

### Login sebagai Admin

```
URL    : http://localhost/sekolah/loginadmin.php
Username: admin
Password: admin
```

> 🔴 **PERINGATAN KEAMANAN KRITIS:**
> Aplikasi ini menggunakan kredensial admin default `admin/admin` yang **harus segera diganti** sebelum digunakan di lingkungan manapun selain lokal. Penggunaan kredensial default di lingkungan produksi atau publik merupakan risiko keamanan serius yang dapat menyebabkan akses tidak sah ke seluruh sistem. Segera ubah username dan password di file `actionlogin.php` setelah instalasi.

### Login sebagai Siswa

```
URL      : http://localhost/sekolah/login.php
NISN     : [NISN siswa yang terdaftar]
Password : [password yang didaftarkan]
```

### Daftar Akun Siswa Baru

```
URL : http://localhost/sekolah/register.php
```
> Siswa harus memiliki NISN yang sudah terdaftar di database sebelum bisa membuat akun.

---

## 📁 Struktur Proyek

```
sekolah/
├── 📄 index.php              # Dashboard utama
├── 📄 koneksi.php            # Konfigurasi koneksi database
├── 📄 login.php              # Halaman login siswa
├── 📄 loginadmin.php         # Halaman login admin
├── 📄 register.php           # Halaman registrasi siswa
├── 📄 logout.php             # Proses logout
├── 📄 actionlogin.php        # Proses autentikasi login
├── 📄 actionregister.php     # Proses registrasi
│
├── 📄 siswa.php              # Daftar data siswa
├── 📄 guru.php               # Daftar data guru
├── 📄 pelajaran.php          # Daftar mata pelajaran
├── 📄 kelas.php              # Daftar kelas
│
├── 📄 kelolasiswa.php        # Form tambah/edit siswa
├── 📄 kelolaguru.php         # Form tambah/edit guru
├── 📄 kelolapelajaran.php    # Form tambah/edit mata pelajaran
│
├── 📄 updatesiswa.php        # Proses update data siswa
├── 📄 updateguru.php         # Proses update data guru
├── 📄 updatepelajaran.php    # Proses update mata pelajaran
│
├── 📄 deletesiswa.php        # Proses hapus data siswa
├── 📄 deleteguru.php         # Proses hapus data guru
├── 📄 deletepelajaran.php    # Proses hapus mata pelajaran
│
├── 📁 css/                   # File CSS yang dikompilasi
├── 📁 js/                    # File JavaScript
├── 📁 scss/                  # Source SCSS
├── 📁 img/                   # Gambar dan aset
├── 📁 vendor/                # Dependensi npm
│
├── 📄 package.json           # Konfigurasi npm
├── 📄 gulpfile.js            # Konfigurasi build Gulp
└── 📄 LICENSE                # Lisensi MIT
```

---

## 🗺️ Alur Aplikasi

```
┌─────────────────────────────────────────────┐
│                  LOGIN PAGE                  │
│         /login.php | /loginadmin.php        │
└───────────────────┬─────────────────────────┘
                    │
                    ▼
┌─────────────────────────────────────────────┐
│               DASHBOARD (index.php)          │
│    📊 Total Siswa | Guru | MAPEL | Kelas    │
└──────┬──────────┬──────────┬────────────────┘
       │          │          │
       ▼          ▼          ▼
  📋 Siswa   📋 Guru    📋 MAPEL    📋 Kelas
  (siswa.php)(guru.php)(pelajaran.php)(kelas.php)
       │          │          │
       ▼          ▼          ▼
  ✏️ CRUD    ✏️ CRUD    ✏️ CRUD   ✏️ CRUD
  (Admin Only)
```

---

## 🤝 Kontribusi

Kontribusi selalu disambut dengan baik! Berikut cara berkontribusi:

1. **Fork** repository ini
2. Buat **branch** fitur baru:
   ```bash
   git checkout -b feature/fitur-baru
   ```
3. **Commit** perubahan Anda:
   ```bash
   git commit -m 'feat: menambahkan fitur baru'
   ```
4. **Push** ke branch:
   ```bash
   git push origin feature/fitur-baru
   ```
5. Buat **Pull Request**

### 📝 Panduan Kontribusi

- Gunakan pesan commit yang deskriptif
- Pastikan kode berfungsi sebelum membuat pull request
- Tambahkan deskripsi yang jelas pada pull request Anda
- Ikuti gaya penulisan kode yang sudah ada

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah **MIT License** — lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

```
Copyright (c) 2022 Nasrul Amin Muis

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions: ...
```

---

## 📬 Kontak

<div align="center">

**Nasrul Amin Muis**

[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/nasrulaminmuis)

</div>

---

<div align="center">

**Dibuat dengan ❤️ oleh [Nasrul Amin Muis](https://github.com/nasrulaminmuis)**

⭐ Jika proyek ini bermanfaat, jangan lupa beri bintang! ⭐

</div>
