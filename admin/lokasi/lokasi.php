<?php
	session_start();
	if(empty($_SESSION['login']) or $_SESSION['level'] != "petugas"){
		header('location: ../../login.php');
	}
	include "../../koneksi.php";
	include "../header_admin.php";
	include "form_lokasi.php";
?>
DATA LOKASI
<table border='1'>
	<tr>
		<th>No</th>
		<th>ID Lokasi</th>
		<th>Nama Lokasi</th>
		<th>Alamat Lokasi</th>
		<th>Aksi</th>
	</tr>
	<?php
		$no = 1;
		$sql = mysqli_query($koneksi, "SELECT * FROM lokasi");
		while ($data = mysqli_fetch_array($sql)) {
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$data['id_lokasi']."</td>";
			echo "<td>".$data['nama_lokasi']."</td>";
			echo "<td>".$data['alamat_lokasi']."</td>";
			echo "<td><a href='aksi_lokasi.php?act=delete&id_lokasi=".$data['id_lokasi']."'>Hapus</a>
			<a href='form_edit_lokasi.php?id_lokasi=".$data['id_lokasi']."'>Edit</a></td>";
			echo "</tr>";
		}
	?>
</table>