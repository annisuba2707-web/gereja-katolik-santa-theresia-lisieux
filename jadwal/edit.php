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
    "SELECT * FROM jadwal WHERE id='$id'"
);

$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Jadwal Misa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header bg-warning">

<h3>Edit Jadwal Misa</h3>

</div>

<div class="card-body">

<form action="update.php" method="POST">

<input
type="hidden"
name="id"
value="<?= $d['id']; ?>">

<div class="mb-3">

<label>Hari</label>

<select
name="hari"
class="form-control"
required>

<option <?= ($d['hari']=="Minggu") ? "selected" : "" ?>>Minggu</option>
<option <?= ($d['hari']=="Senin") ? "selected" : "" ?>>Senin</option>
<option <?= ($d['hari']=="Selasa") ? "selected" : "" ?>>Selasa</option>
<option <?= ($d['hari']=="Rabu") ? "selected" : "" ?>>Rabu</option>
<option <?= ($d['hari']=="Kamis") ? "selected" : "" ?>>Kamis</option>
<option <?= ($d['hari']=="Jumat") ? "selected" : "" ?>>Jumat</option>
<option <?= ($d['hari']=="Sabtu") ? "selected" : "" ?>>Sabtu</option>

</select>

</div>

<div class="mb-3">

<label>Jam Misa</label>

<input
type="time"
name="jam"
class="form-control"
value="<?= $d['jam']; ?>"
required>

</div>

<div class="mb-3">

<label>Keterangan</label>

<input
type="text"
name="keterangan"
class="form-control"
value="<?= $d['keterangan']; ?>"
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