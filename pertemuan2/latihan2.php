<?php 
//FUNGSI BUAATAN SENDIRI
	//harus didefinisikan terlebih dahulu
	//dipanggil pada saat dibutuhkan


//mendefinisikan function
				// membuat parameter function, parameter bentunya variabel, misalnya $nama
				//nilai default (datang, dan admin) akan dipanggil jika pada saat pemanggilan function gada parameter yang dikirim)
function salam($waktu = "Datang", $name = "Admin") {
	//sebuah function biasanya mengembalikan nilai sehingga harus ada return
	return "Selamat $waktu, $name";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>latihan function</title>
</head>
<body>
	<h1><?php //memanggil function?>
					<!-- kirimkan nama sebagai argumen,bisa bebas, krn nanti nilainya akan dikirimkan ke parameter function -->
	<?php echo salam("Pagi","Nisa"); ?></h1>
	<!------------- nilai default akan dipanggil bila tidak ada parameter----------->
	<?php echo salam(); ?>
</body>
</html> 