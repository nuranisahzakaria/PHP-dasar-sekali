<?php 
//---------------TAG PHP UNTUK MENYIAPKAN DATA UNTUK DITAMPILKAN DIBAWAH------------------

// memanggil file functions.php
	// untuk memanggil file lain, kita bisa gunakan require atau include
require 'functions.php';

// panggil baris query data keluarga
$keluarga = query ("SELECT * FROM keluarga");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<!-- Tambah data mahasiswa -->
<a href="tambah.php">Tambah data keluarga</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">
	
<tr>
	<th>No.</th>
	<th>Aksi</th>
	<th>Foto</th>
	<th>nama</th>
	<th>umur</th>
	<th>alamat</th>
	<th>pekerjaan</th>
</tr>
<?php $i = 1;?>

<!-- menggunakan foreach [melooping array] untuk menampilkan data -->
<?php foreach ( $keluarga as $row) : ?>
<tr>
	<td><?= $i ?></td>
	<td>
		<a href="">edit</a> |
		<a href="">hapus</a>
	</td>	
	<td>
		<img src="photos/<?= $row["gambar"]; ?> " width="100px">
	</td>
	<td><?= $row["nama"]; ?></td>
	<td><?= $row["umur"]; ?></td>
	<td><?= $row["alamat"]; ?></td>
	<td><?= $row["pekerjaan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach ?>

</table>

</body>
</html>       