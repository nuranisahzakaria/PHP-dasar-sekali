<?php 
$mahasiswa = ["nur anisah", "200170015", "teknik informatika", "anisa_sz"]

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
		<?php foreach($mahasiswa as $elemen): ?>
			<?php echo $elemen; ?>
		<?php endforeach ?>
	</ul>
</body>
</html>