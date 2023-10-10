<?php
  session_start();
  include "../../koneksi.php";
  if(empty($_SESSION['login']) and $_SESSION['level'] != 'masyarakat'){
		header('location: ../login.php');
	}

  $id_lokasi = $_POST['id_lokasi'];
  $suhu_tubuh = $_POST['suhu_tubuh'];
  $nik = $_SESSION['nik'];
  $tanggal_perjalanan = date('Y-m-d');
  $waktu_perjalanan = date('H:i:s');

  //--simpan data --
  $sql = mysqli_query($koneksi, "INSERT INTO history_perjalanan VALUES(NULL, '".$tanggal_perjalanan."', '".$waktu_perjalanan."', '".$suhu_tubuh."', '".$nik."', '".$id_lokasi."')");
  if($sql){
    echo "berhasil input catatan";
  }else{
    echo "gagal input catatan";
  }
?>