<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Produk</title>
</head>
<body>
  <h1>Tambah Produk Baru</h1>
  <form method="POST">
    Nama Produk: <input type="text" name="nama_produk" required><br><br>
    Harga: <input type="number" name="harga" required><br><br>
    Stok: <input type="number" name="stok" required><br><br>
    <input type="submit" name="submit" value="Simpan">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $nama  = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok  = $_POST['stok'];

    $sql = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', $harga, $stok)";
    if ($conn->query($sql)) {
      header("Location: index.php");
    } else {
      echo "Gagal menambahkan produk!";
    }
  }
  ?>
</body>
</html>
