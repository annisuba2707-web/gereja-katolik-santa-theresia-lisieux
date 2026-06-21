<?php
include "../koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM umat WHERE id='$id'"
);

$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Data Umat</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">
<h4>Edit Data Umat</h4>
</div>

<div class="card-body">

<form action="update.php" method="POST">

<input type="hidden"
name="id"
value="<?= $d['id']; ?>">

<div class="mb-3">

<label>Nama</label>

<input
type="text"
name="nama"
class="form-control"
value="<?= $d['nama']; ?>"
required>

</div>

<div class="mb-3">

<label>Alamat</label>

<input
type="text"
name="alamat"
class="form-control"
value="<?= $d['alamat']; ?>"
required>

</div>

<div class="mb-3">

<label>Telepon</label>

<input
type="text"
name="telepon"
class="form-control"
value="<?= $d['telepon']; ?>"
required>

</div>

<div class="mb-3">

<label>Tanggal Lahir</label>

<input
type="date"
name="tanggal_lahir"
class="form-control"
value="<?= $d['tanggal_lahir']; ?>"
required>

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