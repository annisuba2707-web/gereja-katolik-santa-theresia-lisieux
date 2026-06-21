<?php
include "../koneksi.php";

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

mysqli_query(
    $conn,
    "INSERT INTO pastor(nama,jabatan)
     VALUES('$nama','$jabatan')"
);

header("Location: index.php");