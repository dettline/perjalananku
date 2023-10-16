<?php
  session_start();
  if(empty($_SESSION['login'])){
		header('location: ../login.php');
	}
  include "header_admin.php";
?>


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

      <div class="row mt-4">
        <div class="col-lg-6">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. A odit accusamus aspernatur illum quia vel dolor quasi cum ea blanditiis labore culpa iure, incidunt vitae voluptates eaque debitis! Quia, non?
        </div>
        <div class="col-lg-6">
          <div class="row">

            <div class="col-lg-6">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 fs-1 my-auto text-center">
                    <i class="bi bi-pin-map"></i>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-title">Jumlah Perjalanan</h6>
                      <p class="card-text">12</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 fs-1 my-auto text-center">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-title">Jumlah Lokasi</h6>
                      <p class="card-text">12</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 fs-1 my-auto text-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h6 class="card-title">Jumlah Pengguna</h6>
                      <p class="card-text">12</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  <!-- Akhir Konten -->
</body>
</html>