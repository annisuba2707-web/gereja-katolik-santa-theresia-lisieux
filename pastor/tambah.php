<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Pastor</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

<h2>Tambah Pastor</h2>

<form action="simpan.php" method="POST">

<div class="mb-3">
<label>Nama Pastor</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label>Jabatan</label>
<input type="text" name="jabatan" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary">
Simpan
</button>

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</body>
</html>