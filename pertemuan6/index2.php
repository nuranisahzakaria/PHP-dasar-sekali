<?php 
	// koneksi ke database
			// Untuk koneksi, butuh beberapa parameter didlm functionnya, urutan parameternya ga boleh salah
			// 1. yg pertama menggunakan string kita tulis nama host daridatabase kita => localhost
			// 2. username mysql nya, username efault adalah => root
			// 3. password => kosong
			// 4. nama database
// agar mudah memanggilnya, masukkan nilainya kedalam variabel
$conn = mysqli_connect("localhost", "root", "", "keluarga");

	// ambil data dari tabel keluarga / query
			// parameternya ada 2
			// 1. function koneksi ke database
			// query nya => dalam bentuk string, masukkan data sql
$result = mysqli_query($conn, "SELECT * FROM keluarga");


			// mengecek koneksi ke database
			// if ( !$result ) {
			// 	echo mysqli_error($conn);
			// }

//  ambil data (fetch) keluarga dari result
	// ada 4 cara mengambil data
	// 1. mysqli_fetch_row() => mengembalikan array numerik / index nya angka 

	// 2. mysqli_fetch_assoc() => mengembalikan array associative

	// 3. mysqli_fetch_array()  => mengembalikan array numerik dan associative

	// 3. mysqli_fetch_object() => mengebalikan nilai objek. objek ga punya key numerik ataupun associatif

// while ($klg = mysqli_fetch_assoc($result)) {
// var_dump($klg ["nama"]);
// }
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
<?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
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
<?php endwhile ?>

</table>

</body>
</html>         