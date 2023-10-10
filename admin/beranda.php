<?php
  session_start();
  if(empty($_SESSION['login'])){
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <style>
    .gradient {
      background: linear-gradient(to bottom, #39A69C, #9FC861) no-repeat;
      
    }
    body {
      height:100vh;
    }

    @media (max-width: 1080px) {
      #gambar {
        order:1;
      }
      #deskripsi {
        order: 2;
      }
    }
  </style>
</head>
<body>
  <!-- Awal Navbar -->
  <nav class="navbar sticky-top shadow-lg navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid container">
      <a class="navbar-brand" href="#">
        <img src="../images/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto flax-nowrap">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="../index.php">Beranda</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="catatan/input_perjalanan.php">Buat Catatan Perjalanan</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="lokasi/lokasi.php">Lokasi</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
        </ul>
          <button class="btn btn-outline-success" onclick="location.href='../logout.php'">Keluar</button>
       
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Awal Konten -->
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="card text-bg-info border-0">
            <div class="card-body">
              Selamat datang <?= $_SESSION['nama_lengkap'];?>, silahkan gunakan aplikasi ini dengan memilih menu yang tersedia
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">kiri</div>
        <div class="col-lg-6">kanan</div>
      </div>
    </div>
  <!-- Akhir Konten -->
</body>
</html>