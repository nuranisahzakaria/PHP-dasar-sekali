<!DOCTYPE html>
<html>
<head>
	<title>assosiatif</title>
	<style>
		.kotak{
			width: 70px;
			height: 70px;
			background-color: #BADA55;
			text-align: center;
			line-height: 70px;
			float: left;
			font-size: 60px;
			transition: 1s;
			margin-right: 20px; 
		}
		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
<?php
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
?>

<?php foreach ($angka as $elemen) : ?>
	<div class="kotak"><?= $elemen; ?></div>

<?php endforeach; ?>
<?php 
// array assosiatif
$nim = [[2,0,0,1,7,0,0,1,5], 
		[2,0,0,1,7,0,0,1,6], 
		[2,0,0,1,7,0,0,1,7]

];

?>

<!-- soal cetak nilai ke 5 dari data dalam nim ke 2 -->
<div class="kotak">
	<?php echo $nim[1][4]; ?>

</div>  


	<div class="clear"></div>
	<?php foreach ( $nim as $a ) : ?>
		<?php foreach ( $a as $b ) : ?>
			<div class="kotak"><?= $b; ?></div>
		<?php endforeach; ?>
	<div class="clear"></div>
	<?php endforeach; ?>

 
</body>
</html>