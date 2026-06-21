<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

include "../koneksi.php";

$id = $_POST['id'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$keterangan = $_POST['keterangan'];

mysqli_query(
    $conn,
    "UPDATE jadwal SET
    hari='$hari',
    jam='$jam',
    keterangan='$keterangan'
    WHERE id='$id'"
);

header("Location: index.php");
exit;
?>