<?php 
?>

<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>

<!-- apakah tombol submit sudah dipencet? kalau sudah:-->
<?php if(isset($_POST["submit"])) : ?>
	<!-- tampilkan ini -->
	<h1>Halo, Selamat Datang <?= $_POST["nama"] ?></h1>
	<!-- tapi kalau belum, kosong -->
<?php endif ?>

<!--cara baca kodenya saya mau biki sebuah form yg menggunakan metode request post dan semua data didlm formnya akan dikirimkan  ke halaman latihan4.php-->
<form action="" method="post">
	Masukkan nama Anda :
						<!-- name ini akan menjadi key di array associative POST -->
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">kirim</button>
</form>

</body>
</html>