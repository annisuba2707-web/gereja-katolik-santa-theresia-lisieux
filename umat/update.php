<?php

include "../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$tanggal_lahir = $_POST['tanggal_lahir'];

mysqli_query(
    $conn,
    "UPDATE umat SET
    nama='$nama',
    alamat='$alamat',
    telepon='$telepon',
    tanggal_lahir='$tanggal_lahir'
    WHERE id='$id'"
);

header("Location: index.php");
exit;
?>