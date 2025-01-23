# Hi-Chat

## Deskripsi Proyek
**Hi-Chat** adalah sebuah aplikasi perpesanan real-time yang dirancang sebagai klon dari aplikasi perpesanan modern. Proyek ini dibuat berdasarkan tutorial *Build a Real-Time Messenger Clone* by W2Learn. Aplikasi ini menggunakan teknologi terkini seperti **Laravel 11**, **React.js**, dan **Pusher** untuk memberikan pengalaman pengiriman pesan yang cepat dan mulus.

## Fitur Utama
- **Pengiriman Pesan Real-Time**: Pesan langsung terkirim dan diterima tanpa perlu me-refresh halaman.
- **Authentication**: Sistem login dan registrasi untuk memastikan keamanan pengguna.
- **User Interface Modern**: Tampilan yang bersih dan responsif menggunakan **Tailwind CSS**.
- **Kolaborasi Backend dan Frontend**: Menggunakan **Inertia.js** untuk mengintegrasikan Laravel dengan React.

## Teknologi yang Digunakan
- **Frontend**: React.js, Tailwind CSS
- **Backend**: Laravel 11
- **Real-Time Messaging**: Pusher
- **Integrasi Frontend & Backend**: Inertia.js
- **Database**: MySQL

## Instalasi
Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal:

### Prasyarat
Pastikan Anda sudah menginstal:
- **PHP** (>= 8.1)
- **Composer** (Dependency Manager untuk PHP)
- **Node.js** dan **npm** (untuk pengelolaan frontend)
- **MySQL** (Database Management System)

### Langkah Instalasi
1. **Clone Repository**
   ```bash
   git clone https://github.com/imambahy/hi-chat.git
   cd hi-chat
   ```

2. **Install Dependencies**
   Jalankan perintah berikut untuk menginstal semua dependency backend dan frontend:
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment**
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Sesuaikan konfigurasi database di file `.env` sesuai dengan pengaturan lokal Anda:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=hi_chat
   DB_USERNAME=root
   DB_PASSWORD=yourpassword
   ```

4. **Migrasi Database**
   Jalankan perintah berikut untuk membuat tabel di database:
   ```bash
   php artisan migrate
   ```

5. **Jalankan Aplikasi**
   Gunakan perintah berikut untuk menjalankan server backend dan frontend:
   - Backend:
     ```bash
     php artisan serve
     ```
   - Frontend:
     ```bash
     npm run dev
     ```

6. **Akses Aplikasi**
   Buka browser Anda dan akses aplikasi di:
   ```
   http://localhost:8000
   ```

## Screenshot
(Tambahkan tangkapan layar antarmuka aplikasi di sini jika diperlukan)

## Lisensi
Proyek ini adalah bagian dari pembelajaran pribadi dan tidak menggunakan lisensi khusus.

## Sumber Referensi
Tutorial: [Build a Real-Time Messenger Clone](https://www.youtube.com/watch?v=KImuuLgTa9w&t=19275s&pp=ygUHdzJsZWFybg%3D%3D)

## Kontak
Jika Anda memiliki pertanyaan lebih lanjut tentang proyek ini, silakan hubungi saya:
- **Email**: imambahyp@gmail.com
