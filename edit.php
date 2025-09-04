<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Edit Pesan</h1>

    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-error"><?php echo htmlspecialchars($_GET['error']); ?></div>
    <?php endif; ?>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM pesan WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
    ?>

    <form action="update_aksi.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required>

        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" rows="4" required><?php echo htmlspecialchars($data['pesan']); ?></textarea>

        <button type="submit">Update Pesan</button>
    </form>
</div>

</body>
</html>