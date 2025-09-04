<?php
// Konfigurasi database
$host = 'localhost';
$user = 'root'; // User default mysql
$pass = '';     // Password default kosong
$db   = 'db_bukutamu';

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>