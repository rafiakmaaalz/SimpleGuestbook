<?php
include 'koneksi.php';

// Menangkap data yang dikirim dari form dan membersihkan spasi
$nama = trim($_POST['nama']);
$pesan = trim($_POST['pesan']);

// --- VALIDASI SERVER-SIDE ---
if (empty($nama) || empty($pesan)) {
    // Jika nama atau pesan kosong
    $error = "Nama dan Pesan tidak boleh kosong.";
    header("Location: index.php?error=" . urlencode($error));
    exit();
}

if (strlen($nama) < 3) {
    // Jika nama terlalu pendek
    $error = "Nama minimal harus 3 karakter.";
    header("Location: index.php?error=" . urlencode($error));
    exit();
}
// --- AKHIR VALIDASI ---

// Melanjutkan proses jika validasi berhasil
$nama_safe = mysqli_real_escape_string($koneksi, $nama);
$pesan_safe = mysqli_real_escape_string($koneksi, $pesan);

$query = "INSERT INTO pesan (nama, pesan) VALUES ('$nama_safe', '$pesan_safe')";

if (mysqli_query($koneksi, $query)) {
    $success = "Pesan berhasil ditambahkan!";
    header("Location: index.php?success=" . urlencode($success));
    exit();
} else {
    $error = "Error: " . mysqli_error($koneksi);
    header("Location: index.php?error=" . urlencode($error));
    exit();
}
?>