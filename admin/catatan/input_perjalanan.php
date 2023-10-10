<?php
  session_start();
  include "../../koneksi.php";
  if(empty($_SESSION['login']) and $_SESSION['level'] != 'masyarakat'){
		header('location: ../login.php');
	}
?>
<a href="../beranda.php">Beranda</a> | 
<a href="catatan/input_perjalanan.php">Buat Catatan Perjalanan</a> | 
<a href="../lokasi/lokasi.php">Lokasi</a> | 
<a href="../../logout.php">Logout</a> <br>

FORMULIR CATATAN PERJALANAN
<form action="aksi_perjalanan.php" method="post">
  Pilih Lokasi
  <select name = "id_lokasi">
  <?php
    $sql = mysqli_query($koneksi, "select * from lokasi");
    while ($data = mysqli_fetch_array($sql)) {
      echo "<option value='".$data['id_lokasi']."'>".$data['nama_lokasi']." | ".$data['alamat_lokasi']."</option>";
    }
  ?>
  </select> <br>
  Suhu Tubuh <input type="number" name="suhu_tubuh"><br>
  <input type="submit" value="Simpan">
</form>