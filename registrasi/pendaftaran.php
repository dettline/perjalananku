Pendaftaran Akun
<form action = 'aksi.php' method='post'>
	NIK <input type="number" name="nik"><br>
	Nama Lengkap <input type="text" name="nama_lengkap"><br>
	Username <input type ="text" name = "username"><br>
	Password <input type = "password" name = "password"><br>
	Alamat <textarea name= "alamat"></textarea><br>
	Tempat Lahir <input type = "text" name = "tempat_lahir"><br>
	Tanggal Lahir <input type = "date" name = "tgl_lahir"><br>
	Jenis Kelamin
	<select name="jk">
		<option value="L">Laki-laki</option>
		<option value="P">Perempuan</option>
	</select><br>
	<input type = "submit" value = "Registrasi">
</form>