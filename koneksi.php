<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"db_gereja"
);

if(!$conn){
    die("Koneksi gagal");
}
?>