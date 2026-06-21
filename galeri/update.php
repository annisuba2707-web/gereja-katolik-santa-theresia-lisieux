<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

include "../koneksi.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$foto = $_POST['foto'];
$tanggal = $_POST['tanggal'];

mysqli_query(
    $conn,
    "UPDATE galeri SET
    judul='$judul',
    foto='$foto',
    tanggal='$tanggal'
    WHERE id='$id'"
);

header("Location: index.php");
exit;
?>