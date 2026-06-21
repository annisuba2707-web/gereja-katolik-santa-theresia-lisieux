<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

include "../koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM galeri");
?>

<!DOCTYPE html>
<html>
<head>

<title>Galeri Gereja</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

<h2>Galeri Gereja</h2>

<a href="../dashboard.php"
class="btn btn-secondary mb-3">
Dashboard
</a>

<a href="tambah.php"
class="btn btn-primary mb-3">
Tambah Foto
</a>

<div class="row">

<?php while($row=mysqli_fetch_assoc($data)){ ?>

<div class="col-md-4 mb-4">

<div class="card shadow">

<img src="../img/<?= $row['foto'] ?>"
class="card-img-top"
style="height:250px;object-fit:cover;">

<div class="card-body">

<h5><?= $row['judul'] ?></h5>

<p><?= $row['tanggal'] ?></p>

<a href="edit.php?id=<?= $row['id'] ?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="hapus.php?id=<?= $row['id'] ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus foto?')">
Hapus
</a>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

</body>
</html>