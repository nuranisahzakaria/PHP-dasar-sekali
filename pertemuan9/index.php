<?php 
// menghubungkan halaman index dengan halaman function, dengan tujuan agar tekoneksi ke database
	// 1. menggunakan require
	// 2. menggunakan
require 'function.php';

// ambil data
$namaartis = query("SELECT * FROM tb_artist");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar artist drakor</h1>
<br><br><br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>artist_id</th>
		<th>artist_name</th>
		<th>artist_image</th>
		<th>artist_biography</th>
		<th>artist_sosmed</th>
		<th>artist_fullname</th>
		<th>artist_birth_date</th>
		<th>artist_birth_place</th>
		<th>artist_group</th>
		<th>artist_occupation</th>
		<th>artist_record_Label</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach ( $namaartis as $artis ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $artis ["artist_name"]; ?></td>
		<td><img src="photos/<?= $artis ["artist_image"]; ?>" width="160px"></td>
		<td><?= $artis ["artist_biography"]; ?></td>
		<td><?= $artis ["artist_sosmed"]; ?></td>
		<td><?= $artis ["artist_fullname"]; ?></td>
		<td><?= $artis ["artist_birth_date"]; ?></td>
		<td><?= $artis ["artist_birth_place"]; ?></td>
		<td><?= $artis ["artist_group"]; ?></td>
		<td><?= $artis ["artist_occupation"]; ?></td>
		<td><?= $artis ["artist_record_Label"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach ?>
</table>
</body>
</html>