<!-- SOURCECODE AWAL -->

<?php 
// koneksi kedatabase
	// terdapat 4 parameter
		// 1. string nama host dari database
		// 2. username mysqli default => root
		// 3. password => kosong
		// 4. nama database
$conn = mysqli_connect("localhost", "root", "", "mysita.com");

// ambil data dari tabel (query)
	// terdapat 2 parameter
		// 1. koneksi
		// 2. queri (sintaks sql)
$result = mysqli_query($conn, "SELECT * FROM tb_artist");
if (!$result){
	mysqli_error($result);
}

// ambil data (fetch) dari object $result

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
	<?php while ( $artis = mysqli_fetch_assoc($result) ) : ?>
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
	<?php endwhile ?>
</table>
</body>
</html>