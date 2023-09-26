<?php
  session_start();
  include "koneksi.php";
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  //-- cek apakah username dan password nya ada di tabel pengguna --
  $sql = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '".$username."' and password = '".$password."'");
  $cek = mysqli_num_rows($sql);
  if($cek > 0){
    //--kalau datanya ada --
    $_SESSION['login'] = "sudah login";
  }else{
    echo "username atau password salah!";
  }
?>