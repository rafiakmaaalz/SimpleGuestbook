📖 Buku Tamu Sederhana (Simple Guestbook)
Aplikasi web Buku Tamu sederhana yang dibangun menggunakan PHP Native dan database MySQL. Proyek ini dibuat sebagai latihan dasar untuk memahami operasi CRUD (Create, Read, Update, Delete) dalam pengembangan web dengan PHP.

Pengunjung dapat menambahkan pesan baru, dan pemilik aplikasi dapat mengelola semua pesan yang masuk.

✨ Fitur Utama
Tambah Pesan (Create): Pengguna dapat mengirimkan nama dan pesan mereka melalui sebuah form.

Tampilkan Pesan (Read): Menampilkan semua pesan yang telah dikirim, diurutkan dari yang terbaru.

Edit Pesan (Update): Memperbarui pesan yang sudah ada.

Hapus Pesan (Delete): Menghapus pesan tertentu dari daftar.

Validasi Sisi Server: Mencegah pengiriman form kosong.

Desain Responsif: Tampilan yang rapi dan fungsional di berbagai ukuran layar.

🛠️ Teknologi yang Digunakan
Frontend: HTML, CSS

Backend: PHP (Native/Prosedural)

Database: MySQL / MariaDB

🚀 Cara Instalasi dan Menjalankan
Ikuti langkah-langkah di bawah ini untuk menjalankan proyek di lingkungan lokal Anda.

Prasyarat
Pastikan Anda sudah menginstal Web Server seperti XAMPP atau sejenisnya (yang sudah termasuk Apache, PHP, dan MySQL).

Langkah-langkah
Clone Repositori

Bash

git clone https://github.com/NAMA_USERNAME_ANDA/NAMA_REPOSITORI_ANDA.git
Atau, unduh ZIP dan ekstrak ke folder htdocs di dalam direktori XAMPP Anda.

Setup Database

Buka phpMyAdmin (http://localhost/phpmyadmin).

Buat database baru dengan nama db_bukutamu.

Pilih database db_bukutamu, lalu buka tab SQL dan jalankan query berikut untuk membuat tabel pesan:

SQL

CREATE TABLE pesan (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    pesan TEXT NOT NULL,
    waktu_posting TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Konfigurasi Koneksi

Buka file koneksi.php.

Sesuaikan detail koneksi database ($host, $user, $pass, $db) jika berbeda dari pengaturan default XAMPP.

Jalankan Aplikasi

Jalankan Apache dan MySQL dari XAMPP Control Panel.

Buka browser Anda dan akses URL: http://localhost/NAMA_FOLDER_PROYEK_ANDA

📂 Struktur File
/bukutamu
├── koneksi.php         # Menghubungkan aplikasi ke database
├── style.css           # Styling untuk semua halaman
├── index.php           # Halaman utama (Menampilkan & menambah pesan)
├── tambah_aksi.php     # Memproses data dari form tambah
├── edit.php            # Halaman form untuk mengedit pesan
├── update_aksi.php     # Memproses data dari form edit
└── hapus.php           # Skrip untuk menghapus pesan
