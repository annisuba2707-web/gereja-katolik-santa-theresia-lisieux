<?php
include "../koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM pastor WHERE id='$id'"
);

$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Pastor</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

<h2>Edit Data Pastor</h2>

<form action="update.php" method="POST">

<input type="hidden"
       name="id"
       value="<?= $d['id']; ?>">

<div class="mb-3">
<label>Nama Pastor</label>
<input type="text"
       name="nama"
       class="form-control"
       value="<?= $d['nama']; ?>"
       required>
</div>

<div class="mb-3">
<label>Jabatan</label>
<input type="text"
       name="jabatan"
       class="form-control"
       value="<?= $d['jabatan']; ?>"
       required>
</div>

<button type="submit"
        class="btn btn-primary">
Update
</button>

<a href="index.php"
   class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</body>
</html>