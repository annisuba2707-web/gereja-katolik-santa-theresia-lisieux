<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

include "../koneksi.php";

$nama = trim($_POST['nama']);
$alamat = trim($_POST['alamat']);
$telepon = trim($_POST['telepon']);
$tanggal_lahir = $_POST['tanggal_lahir'];

if(
    empty($nama) ||
    empty($alamat) ||
    empty($telepon) ||
    empty($tanggal_lahir)
){
    die("Semua data wajib diisi!");
}

$query = mysqli_query(
    $conn,
    "INSERT INTO umat
    (nama, alamat, telepon, tanggal_lahir)
    VALUES
    ('$nama','$alamat','$telepon','$tanggal_lahir')"
);

if($query){

    header("Location: index.php");
    exit;

}else{

    echo "Gagal menyimpan data : "
         . mysqli_error($conn);

}
?>