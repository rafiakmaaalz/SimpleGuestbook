<?php
include 'koneksi.php';

// Mengambil id dari URL
$id = $_GET['id'];

// Query untuk menghapus data
$query = "DELETE FROM pesan WHERE id = '$id'";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    // Redirect ke halaman utama jika berhasil
    header("Location: index.php");
    exit();
} else {
    // Jika gagal
    echo "Error deleting record: " . mysqli_error($koneksi);
}
?>