<?php
  session_start();
  include "../../koneksi.php";
  if(empty($_SESSION['login']) and $_SESSION['level'] != 'masyarakat'){
		header('location: ../login.php');
	}
  include "../header_admin.php";
?>
<!-- Card Input -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto">
    <div class="card text-center mt-4">
      <div class="card-header">
      
      </div>
      <div class="card-body">
        <h5 class="card-title">Formulir Catatan Perjalanan</h5>
        <p class="card-text">Input catatan perjalananmu</p>
        <form action="aksi_perjalanan.php" method="post">
          <div class="row">
            <div class="col-lg-10 mx-auto mt-3">

              <div class="row">
                <div class="col-lg-3">
                <label for="" class=''>Pilih Lokasi</label>
                </div>
                <div class="col-lg-9"></div>
              </div>
              
              <select name = "id_lokasi" class='form-control'>
                <?php
                  $sql = mysqli_query($koneksi, "select * from lokasi");
                  while ($data = mysqli_fetch_array($sql)) {
                    echo "<option value='".$data['id_lokasi']."'>".$data['nama_lokasi']." | ".$data['alamat_lokasi']."</option>";
                  }
                ?>
              </select>

            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 mx-auto mt-3">
              <div class="row">
                <div class="col-lg-3">
                  <label for="" class=''>Suhu Tubuh</label>
                </div>
                <div class="col-lg-9"></div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <input type="number" name="suhu_tubuh" class='form-control'>
                </div>
                <div class="col-lg-8"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 mx-auto mt-3">
              <input type="submit" value="Simpan" class="btn btn-success">
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer text-body-secondary">
      
      </div>
    </div>
    </div>
  </div>
</div>
<!-- Akhir Card Input -->
FORMULIR CATATAN PERJALANAN


<table class="table table-bordered">
  <thead>
    <tr>
      <th>NO</th>
      <th>LOKASI</th>
      <th>TANGGAL</th>
      <th>JAM</th>
      <th>SUHU</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
      $sql = mysqli_query($koneksi, "select * from history_perjalanan hp
                                     inner join lokasi lk on hp.id_lokasi = lk.id_lokasi
                                     where hp.nik = '".$_SESSION['nik']."'");
      while ($data = mysqli_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data['nama_lokasi']."</td>";
        echo "<td>".$data['tanggal_perjalanan']."</td>";
        echo "<td>".$data['waktu_perjalanan']."</td>";
        echo "<td>".$data['suhu_tubuh']."</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>