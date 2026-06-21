<?php

include "../koneksi.php";

$hari = $_POST['hari'];
$jam = $_POST['jam'];
$keterangan = $_POST['keterangan'];

mysqli_query(
    $conn,
    "INSERT INTO jadwal
    (hari,jam,keterangan)
    VALUES
    ('$hari','$jam','$keterangan')"
);

header("Location: index.php");
exit;
?>