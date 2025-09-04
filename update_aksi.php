<?php
include 'koneksi.php';

// Menangkap data dan membersihkan spasi
$id = $_POST['id'];
$nama = trim($_POST['nama']);
$pesan = trim($_POST['pesan']);

// --- VALIDASI SERVER-SIDE ---
if (empty($nama) || empty($pesan)) {
    $error = "Nama dan Pesan tidak boleh kosong.";
    // Arahkan kembali ke halaman edit dengan ID dan pesan error
    header("Location: edit.php?id=$id&error=" . urlencode($error));
    exit();
}

if (strlen($nama) < 3) {
    $error = "Nama minimal harus 3 karakter.";
    header("Location: edit.php?id=$id&error=" . urlencode($error));
    exit();
}
// --- AKHIR VALIDASI ---

// Melanjutkan proses jika validasi berhasil
$nama_safe = mysqli_real_escape_string($koneksi, $nama);
$pesan_safe = mysqli_real_escape_string($koneksi, $pesan);

$query = "UPDATE pesan SET nama = '$nama_safe', pesan = '$pesan_safe' WHERE id = '$id'";

if (mysqli_query($koneksi, $query)) {
    $success = "Pesan berhasil diperbarui!";
    header("Location: index.php?success=" . urlencode($success));
    exit();
} else {
    $error = "Gagal memperbarui pesan: " . mysqli_error($koneksi);
    header("Location: edit.php?id=$id&error=" . urlencode($error));
    exit();
}
?>