<!DOCTYPE html>
<html>
<head>

<title>Tambah Foto</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

<h2>Tambah Foto Galeri</h2>

<form action="simpan.php" method="POST">

<div class="mb-3">

<label>Judul</label>

<input type="text"
name="judul"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Nama File Foto</label>

<input type="text"
name="foto"
class="form-control"
placeholder="contoh: gereja.jpg"
required>

</div>

<div class="mb-3">

<label>Tanggal</label>

<input type="date"
name="tanggal"
class="form-control"
required>

</div>

<button type="submit"
class="btn btn-primary">
Simpan
</button>

</form>

</div>

</body>
</html>