<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

include "../koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM jadwal");
?>

<!DOCTYPE html>
<html>
<head>
<title>Jadwal Misa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

<div class="d-flex justify-content-between mb-3">

<h2>Jadwal Misa</h2>

<div>

<a href="../dashboard.php"
class="btn btn-secondary">
Dashboard
</a>

<a href="tambah.php"
class="btn btn-primary">
Tambah Jadwal
</a>

</div>

</div>

<table class="table table-bordered">

<thead class="table-dark">

<tr>
<th>No</th>
<th>Hari</th>
<th>Jam</th>
<th>Keterangan</th>
<th>Aksi</th>
</tr>

</thead>

<tbody>

<?php
$no=1;
while($row=mysqli_fetch_assoc($data)){
?>

<tr>

<td><?= $no++ ?></td>
<td><?= $row['hari'] ?></td>
<td><?= $row['jam'] ?></td>
<td><?= $row['keterangan'] ?></td>

<td>

<a href="edit.php?id=<?= $row['id'] ?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="hapus.php?id=<?= $row['id'] ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin hapus?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>
</html>