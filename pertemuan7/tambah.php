<?php 
require 'functions.php';
// cek apakah tombol submit(yg didalam method post yg keynya submit)  sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

	// cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST) > 0 ){
		echo "data berhasil ditambahkan";
	} else {
		echo "data gagal ditambahkan";
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah data keluarga</title>
</head>

<h1>Tambah data keluarga</h1>

<form action="" method="post">
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama">
		</li>

		<li>
			<label for="umur">Umur : </label>
			<input type="text" name="umur" id="umur">
		</li>

		<li>
			<label for="alamat">Alamat : </label>
			<input type="text" name="alamat" id="alamat">
		</li>

		<li>
			<label for="pekerjaan">Pekerjaan : </label>
			<input type="text" name="pekerjaan" id="pekerjaan">
		</li>
		<li>
			<label for="gambar">gambar : </label>
			<input type="text" name="gambar" id="gambar">
		</li>		
		<li>
			<button>Tambah Data</button>
		</li>

</form>

</body>
</html>