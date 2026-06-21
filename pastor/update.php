<?php
include "../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

mysqli_query(
    $conn,
    "UPDATE pastor
     SET nama='$nama',
         jabatan='$jabatan'
     WHERE id='$id'"
);

header("Location: index.php");
exit;
?>