<?php 

require 'functions.php';
$keluarga = query ("SELECT * FROM keluarga");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
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