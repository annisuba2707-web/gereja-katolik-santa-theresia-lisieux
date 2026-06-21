<?php

include "../koneksi.php";

$judul = $_POST['judul'];
$foto = $_POST['foto'];
$tanggal = $_POST['tanggal'];

mysqli_query(
$conn,
"INSERT INTO galeri(judul,foto,tanggal)
VALUES('$judul','$foto','$tanggal')"
);

header("Location:index.php");