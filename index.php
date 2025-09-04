<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Buku Tamu Sederhana</h1>

    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-error"><?php echo htmlspecialchars($_GET['error']); ?></div>
    <?php endif; ?>
    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($_GET['success']); ?></div>
    <?php endif; ?>

    <form action="tambah_aksi.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" rows="4" required></textarea>

        <button type="submit">Kirim Pesan</button>
    </form>

    <h2>Daftar Pesan</h2>

    <?php
    include 'koneksi.php';
    $query = "SELECT * FROM pesan ORDER BY id DESC";
    $result = mysqli_query($koneksi, $query);

    while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <div class="pesan-item">
            <strong><?php echo htmlspecialchars($data['nama']); ?></strong>
            <p><?php echo nl2br(htmlspecialchars($data['pesan'])); ?></p>
            <small>Diposting pada: <?php echo date('d M Y, H:i', strtotime($data['waktu_posting'])); ?></small>
            <div class="aksi">
                <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                <a href="hapus.php?id=<?php echo $data['id']; ?>" class="hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">Hapus</a>
            </div>
        </div>
    <?php
    }
    ?>
</div>

</body>
</html>