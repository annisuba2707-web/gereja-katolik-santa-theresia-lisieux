<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

include "../koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM galeri WHERE id='$id'"
);

$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Galeri</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header bg-warning">

<h3>Edit Data Galeri</h3>

</div>

<div class="card-body">

<form action="update.php" method="POST">

<input
type="hidden"
name="id"
value="<?= $d['id']; ?>">

<div class="mb-3">

<label>Judul Foto</label>

<input
type="text"
name="judul"
class="form-control"
value="<?= $d['judul']; ?>"
required>

</div>

<div class="mb-3">

<label>Nama File Foto</label>

<input
type="text"
name="foto"
class="form-control"
value="<?= $d['foto']; ?>"
required>

<small class="text-muted">
Contoh: gereja.jpg
</small>

</div>

<div class="mb-3">

<label>Tanggal Kegiatan</label>

<input
type="date"
name="tanggal"
class="form-control"
value="<?= $d['tanggal']; ?>"
required>

</div>

<div class="mb-3">

<img
src="../img/<?= $d['foto']; ?>"
width="250"
class="img-thumbnail">

</div>

<button
type="submit"
class="btn btn-primary">

Update

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