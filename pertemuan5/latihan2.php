<?php 
//cek apakah tidah ada data di $_GET
if (!isset($_GET["nama"]) || 
	!isset($_GET["umur"]) ||
	!isset($_GET["alamat"]) ||
	!isset($_GET["pekerjaan"]))

{

	// redirect => memindahkan user dari sebuah halaman
	header("Location: latihan1.php");
	exit;
}
	//ketika $_GET nama belum di set, paksa usernya untuk pindah ke latihan1
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Keluarga</title>
	<style>
		img {
			width: 200px;
		}
	</style>
</head>
<body>
	<h1>Detail Keluarga</h1>
	<ul>
		<li><img src="photos/<?= $_GET["gambar"]; ?>"></li>
			<li><?= $_GET["nama"]; ?></li>
			<li><?= $_GET["umur"]; ?></li>
			<li><?= $_GET["alamat"]; ?></li>
			<li><?= $_GET["pekerjaan"]; ?></li>
	</ul>

</body>
</html>