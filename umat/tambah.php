<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Data Umat</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h3>Tambah Data Umat</h3>

</div>

<div class="card-body">

<form action="simpan.php" method="POST">

<div class="mb-3">

<label class="form-label">
Nama Umat
</label>

<input
type="text"
name="nama"
class="form-control"
placeholder="Masukkan nama umat"
required>

</div>

<div class="mb-3">

<label class="form-label">
Alamat
</label>

<textarea
name="alamat"
class="form-control"
rows="3"
placeholder="Masukkan alamat"
required></textarea>

</div>

<div class="mb-3">

<label class="form-label">
Telepon
</label>

<input
type="text"
name="telepon"
class="form-control"
placeholder="08xxxxxxxxxx"
required>

</div>

<div class="mb-3">

<label class="form-label">
Tanggal Lahir
</label>

<input
type="date"
name="tanggal_lahir"
class="form-control"
required>

</div>

<button
type="submit"
class="btn btn-primary">

Simpan

</button>

<a href="index.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</body>
</html>