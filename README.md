<p align="center">
  <h1 align="center">Sistem Informasi & Manajemen Konten - Dinas Kelautan & Perikanan</h1>
  <p align="center">
    Aplikasi web berbasis <strong>Laravel 10</strong> terintegrasi dengan dashboard admin modern menggunakan tema <strong>Metronic (Bootstrap 5)</strong>. Aplikasi ini dirancang untuk mengelola berbagai informasi publik, profil instansi, layanan pengaduan, dan data PPID (Pejabat Pengelola Informasi dan Dokumentasi) pada lingkup Dinas Kelautan dan Perikanan.
  </p>
</p>

## 🚀 Fitur Utama

Sistem ini memiliki berbagai modul manajemen data publik yang sangat lengkap, antara lain:

- **Manajemen Berita & Pengumuman:** Publikasi artikel, kegiatan, dan pengumuman resmi instansi.
- **Profil Instansi:** Kelola Profil Pejabat, Visi Misi, Tugas & Fungsi, Maklumat Pelayanan, dan Sejarah.
- **Manajemen PPID (Informasi Publik):**
  - Informasi Berkala (RPJMD, Renstra, Renja, KUA).
  - Informasi Serta Merta (SOP, Daftar Informasi, Formulir Permohonan).
  - Informasi Sedia Setiap Saat.
- **Layanan Masyarakat:**
  - Integrasi form **Pengaduan Masyarakat**.
  - Form **Survei Kepuasan** pelayanan publik.
- **Galeri & Dokumentasi:** Kelola Album Kegiatan (Foto) dan Video Kegiatan.
- **Dashboard Interaktif:** Visualisasi data ringkas menggunakan AmCharts & DataTables yang modern.

## 🛠️ Tech Stack

- **Framework:** Laravel (PHP 8.2+)
- **Frontend / UI:** Bootstrap 5, Metronic 8 Admin Theme
- **Database:** MySQL / MariaDB
- **Assets Bundler:** Vite
- **Plugins Utama:** DataTables, CKEditor 5, FullCalendar, SweetAlert2, AmCharts 5.

## 📋 Persyaratan Sistem

Pastikan environment Anda memenuhi persyaratan berikut sebelum melakukan instalasi:
- PHP >= 8.1
- Composer 2.x
- Node.js & npm (untuk Vite)
- MySQL / MariaDB (Disarankan menggunakan Laragon/XAMPP untuk Windows)

## ⚙️ Instalasi & Setup (Local Development)

Ikuti langkah-langkah di bawah ini untuk menjalankan project di local server Anda:

1. **Clone repository ini**
   ```bash
   git clone https://github.com/username/repository-anda.git
   cd repository-anda
   ```

2. **Install dependensi PHP via Composer**
   ```bash
   composer install
   ```

3. **Install dependensi Node (Frontend) & Build Assets**
   ```bash
   npm install
   npm run build
   ```

4. **Konfigurasi Environment Variable**
   - Salin file `.env.example` dan ubah namanya menjadi `.env`
   ```bash
   cp .env.example .env
   ```
   - Generate application key:
   ```bash
   php artisan key:generate
   ```
   - Buka file `.env` lalu sesuaikan konfigurasi database Anda:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laraveldinas
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Migrasi dan Seeding Database**
   Jalankan perintah ini untuk membuat struktur tabel secara otomatis dan memasukkan data admin default:
   ```bash
   php artisan migrate:fresh --seed
   ```

6. **Jalankan Aplikasi**
   Jalankan server lokal Laravel (atau bisa langsung diakses dari `appdinas.test` jika menggunakan Laragon):
   ```bash
   php artisan serve
   ```
   Aplikasi dapat diakses pada browser melalui `http://localhost:8000`.

## 👤 Akun Default (Seeder)

Gunakan kredensial berikut untuk login ke halaman Dashboard Admin (jika belum diubah):
- **Email:** `admin@gmail.com`
- **Password:** Sesuai konfigurasi bawaan pada `AdminSeeder`.

## 📂 Struktur Direktori Utama

- `app/` - Logic controller, model, middleware.
- `database/` - File migrasi dan database seeders.
- `resources/views/LayoutAdmin/` - File template, header, sidebar untuk dashboard Metronic.
- `public/assets2/` - Asset statis (CSS/JS bundle, plugins, images) hasil kompilasi.

## 🤝 Kontribusi

Aplikasi ini dikembangkan untuk penggunaan internal, jika ada bug atau masukan pengembangan silakan buat *Pull Request* atau sampaikan pada *Issue tracker*.

## 📄 Lisensi

Proyek ini bersifat tertutup (proprietary) khusus untuk Dinas Kelautan dan Perikanan. Penggunaan di luar instansi memerlukan izin tertulis.
