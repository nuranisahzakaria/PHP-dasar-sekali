<?php 
//ARRAY MULTI DIMENSI
$mahasiswa = [  ["nur anisah", "200170015", "teknik informatika", "anisa_sz"], 
				["nur anisah 002", "200I70015", "teknik inIormatika", "anisa"],
				["nur anisah 003", "200170015", "teknik informatika", "nisaaaa"]

];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($mahasiswa as $elemen): ?>
	<ul>
		<li>Nama	: <?= $elemen[0] ?></li>
		<li>NIM		: <?= $elemen[1] ?></li>
		<li>Jurusan	:<?= $elemen[2] ?></li>
		<li>Email	:<?= $elemen[3] ?></li>
	</ul>
	<?php endforeach ?>
</body>
</html>