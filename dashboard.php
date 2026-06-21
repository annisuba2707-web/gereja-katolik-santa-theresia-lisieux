<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM umat");
$jumlah_umat = mysqli_num_rows($query);

$username = isset($_SESSION['username'])
            ? $_SESSION['username']
            : 'Admin';
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Admin Gereja Katolik</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f7fa;
}

.navbar{
    background:#0d47a1 !important;
}

.dashboard-title{
    color:#0d47a1;
    font-weight:bold;
}

.card{
    border:none;
    border-radius:15px;
}

.card:hover{
    transform:translateY(-5px);
    transition:0.3s;
}

.total-card{
    background:#1565c0;
    color:white;
}

.footer{
    background:#0d47a1;
    color:white;
    text-align:center;
    padding:15px;
    margin-top:40px;
}

.btn-purple{
    background:#6f42c1;
    color:white;
    border:none;
}

.btn-purple:hover{
    background:#5a32a3;
    color:white;
}

</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">

<div class="container">

<a class="navbar-brand fw-bold d-flex align-items-center">

<img src="img/logo.jpg"
     width="45"
     height="45"
     class="me-2 rounded-circle">

Gereja Katolik St. Theresia Lisieux

</a>

<div>

<span class="text-white me-3">
Selamat Datang,
<b><?= $username ?></b>
</span>

<a href="index.php" class="btn btn-light btn-sm">
Home
</a>

<a href="logout.php" class="btn btn-danger btn-sm">
Logout
</a>

</div>

</div>

</nav>

<div class="container mt-5">

<h1 class="dashboard-title">
Dashboard Admin Gereja Katolik
</h1>

<p>
Kelola data Gereja Katolik St. Theresia Lisieux - Paroki Rantepao melalui menu berikut.
</p>

<div class="row mt-4">

<div class="col-md-4 mb-4">

<div class="card total-card shadow">

<div class="card-body text-center">

<h1><?= $jumlah_umat ?></h1>

<h4>Total Umat Katolik</h4>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h3>Data Umat</h3>

<p>Tambah, edit dan hapus data umat.</p>

<a href="umat/index.php"
class="btn btn-primary">

Kelola Data

</a>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h3>API Data Umat</h3>

<p>Lihat data JSON umat gereja.</p>

<a href="api/umat.php"
class="btn btn-success">

Lihat API

</a>

</div>

</div>

</div>

</div>

<hr>

<div class="row mt-4">

<div class="col-md-4 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h3>Pastor</h3>

<p>Kelola data pastor.</p>

<a href="pastor/index.php"
class="btn btn-warning">

Kelola

</a>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h3>Jadwal Misa</h3>

<p>Kelola jadwal misa gereja.</p>

<a href="jadwal/index.php"
class="btn btn-info text-white">

Kelola

</a>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h3>Galeri Gereja</h3>

<p>Kelola foto kegiatan gereja.</p>

<a href="galeri/index.php"
class="btn btn-purple">
Kelola
</a>

</div>

</div>

</div>

</div>

</div>

<div class="footer">
© 2026 Gereja Katolik St. Theresia Lisieux - Paroki Rantepao
</div>

</body>
</html>