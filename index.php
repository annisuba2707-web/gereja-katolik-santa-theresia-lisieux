<?php
include "koneksi.php";

$pastor = mysqli_query($conn,"SELECT * FROM pastor");
$jadwal = mysqli_query($conn,"SELECT * FROM jadwal");
$galeri = mysqli_query($conn,"SELECT * FROM galeri");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gereja Katolik St. Theresia Lisieux - Paroki Rantepao</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <img src="img/logo.jpg"
                 width="45"
                 height="45"
                 class="me-2">

            Gereja Katolik St. Theresia Lisieux
        </a>

        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#home">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#tentang">
                        Tentang
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#jadwal">
                        Jadwal Misa
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#galeri">
                        Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                        Login Admin
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<!-- Hero -->
<section id="home" class="hero">

    <div class="container text-center text-white">

        <h1 class="display-4 fw-bold">
            Selamat Datang di Gereja Katolik
            St. Theresia Lisieux
        </h1>

        <p class="lead">
            Paroki Rantepao - Tempat Bertumbuh
            dalam Iman, Harapan dan Kasih.
        </p>

        <a href="#tentang"
           class="btn btn-warning btn-lg">
            Selengkapnya
        </a>

    </div>

</section>

<!-- Tentang -->
<section id="tentang" class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <img src="img/gereja2.jpg"
                     class="img-fluid rounded shadow">

            </div>

            <div class="col-md-6">

                <h2>Tentang Gereja</h2>

                <p>
                    Gereja Katolik St. Theresia Lisieux
                    merupakan salah satu paroki yang berada
                    di Rantepao, Kabupaten Toraja Utara.
                </p>

                <p>
                    Gereja ini menjadi tempat umat Katolik
                    berkumpul untuk merayakan Ekaristi,
                    memperdalam iman, serta melayani
                    sesama dalam semangat kasih Kristus.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- Visi Misi -->
<section class="bg-light py-5">

    <div class="container">

        <div class="text-center mb-4">

            <h2>Visi & Misi</h2>

        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="card shadow">

                    <div class="card-body">

                        <h4>Visi</h4>

                        <p>
                            Menjadi komunitas umat beriman
                            yang hidup dalam kasih Kristus,
                            bertumbuh dalam iman dan menjadi
                            saksi Injil di tengah masyarakat.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-6">

                <div class="card shadow">

                    <div class="card-body">

                        <h4>Misi</h4>

                        <ul>

                            <li>Meningkatkan kehidupan iman umat.</li>

                            <li>Mengembangkan pelayanan pastoral.</li>

                            <li>Membangun persaudaraan dan solidaritas.</li>

                            <li>Mendukung pembinaan generasi muda Katolik.</li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Jadwal Misa -->
<section id="jadwal" class="py-5">

<div class="container">

<div class="text-center mb-4">
<h2>Jadwal Misa</h2>
</div>

<div class="row">

<?php while($j=mysqli_fetch_assoc($jadwal)){ ?>

<div class="col-md-4 mb-3">

<div class="card shadow">

<div class="card-body text-center">

<h5><?= $j['keterangan']; ?></h5>

<p>
<?= $j['hari']; ?> 
<?= substr($j['jam'],0,5); ?>
</p>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

</section>

<!-- Pastor -->
<section id="pastor" class="bg-light py-5">

<div class="container">

<div class="text-center mb-4">
<h2>Pastor Paroki</h2>
</div>

<div class="row">

<?php while($p=mysqli_fetch_assoc($pastor)){ ?>

<div class="col-md-4 mb-3">

<div class="card shadow text-center">

<div class="card-body">

<h5><?= $p['nama']; ?></h5>

<p><?= $p['jabatan']; ?></p>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

</section>

<!-- Galeri -->

<!-- Galeri -->
<section id="galeri" class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2>Galeri Kegiatan Gereja</h2>

            <p class="text-muted">
                Dokumentasi kegiatan Gereja Katolik St. Theresia Lisieux
            </p>

        </div>

        <div class="row">

            <?php while($g = mysqli_fetch_assoc($galeri)){ ?>

            <div class="col-md-3 mb-4">

                <div class="card shadow h-100">

                    <img src="img/<?= $g['foto']; ?>"
                         class="card-img-top"
                         style="height:250px; object-fit:cover;">

                    <div class="card-body text-center">

                        <h5><?= $g['judul']; ?></h5>

                        <p class="text-muted">
                            <?= $g['tanggal']; ?>
                        </p>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>

</section>


<!-- Footer -->
<footer class="bg-primary text-white text-center py-3">

    <p class="mb-0">
        © 2026 Gereja Katolik St. Theresia Lisieux - Paroki Rantepao
    </p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="script.js"></script>

</body>
</html>