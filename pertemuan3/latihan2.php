<?php 
// PENGULANGAN PADA ARRAY
	//for
	//foreach
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "nisa"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>pengulangan</title>
	<style>
		.kotak{
			width: 50px;
			width: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>

	<!-- supaya php nya ngitung  sendiri jumlah elemen di array, kita bisa manfaatkan fungsi yang namanya count-->
<?php for( $i = 0; $i < count($angka); $i++ ) {?>
	<!-- indeksnya kita gunakan looping, agar dia mengambil array dg indeks yg berbeda dan berurutan, seperti looping kita -->
<div class="kotak"><?php echo $angka[$i]; ?></div>
	<!-- tutup fornya disimpan dibawah, jadi dia akan mengulang kode didlmnya (didlm 3) sejumlah elemen di for -->
<?php } ?>


<!-- untuk membersihkan float nya, agar turun kebawah -->
<div class="clear"></div>


<!-- arti dari foreach untuk setiap elemen didalam array lakukan sesuatu->  -->
<?php foreach( $angka as $satuangka ) { ?>
	<div class="kotak"><?php echo $satuangka; ?></div>
<?php } ?>


<div class="clear"></div>


<!-- gaya penulisan lain -->
<?php foreach ( $angka as $satuangka ) : ?>
	<div class="kotak"><?= $satuangka ?></div>
<?php endforeach ?>

</body>
</html>