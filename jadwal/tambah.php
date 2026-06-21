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

<title>Tambah Jadwal Misa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h3>Tambah Jadwal Misa</h3>

</div>

<div class="card-body">

<form action="simpan.php" method="POST">

<div class="mb-3">

<label>Hari</label>

<select
name="hari"
class="form-control"
required>

<option value="">-- Pilih Hari --</option>

<option>Minggu</option>
<option>Senin</option>
<option>Selasa</option>
<option>Rabu</option>
<option>Kamis</option>
<option>Jumat</option>
<option>Sabtu</option>

</select>

</div>

<div class="mb-3">

<label>Jam Misa</label>

<input
type="time"
name="jam"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Keterangan</label>

<input
type="text"
name="keterangan"
class="form-control"
placeholder="Contoh: Misa Minggu"
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