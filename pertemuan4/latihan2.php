<?php 
// $mahasiswa = [
// 				["nur anisah", "200170015","anisa_sz", "informatika"],
// 				["nisa", "20000011000010", "anisaaa", "informatika"]
// ];



//ARRAY ASSOSIATIF
//definisinya sama spt array numerik, kecuali:
//key-nya (bukan nomor index) adalah string yg kita buat sendiri

$mahasiswa = 
[ 
	[ 
		"nama" => "nur anisah", 
		"nim" => "2001700156", 
		"id" => "anisa_sz", 
		"jurusan" => "informatika",
		"tugas" => [94, 85, 92]
	],
	[
		"nama" => "Nisa", 
		"nim" => "20017001889", 
		"id" => "anisaaa", 
		"jurusan" => "informatika",
		"tugas" => [90, 85, 95]
	]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?= $mahasiswa[1]["jurusan"]; ?>
	<?= $mahasiswa[1]["tugas"][2]; ?>
	<br><br>
	<?php print_r($mahasiswa)?>
</body>
</html>