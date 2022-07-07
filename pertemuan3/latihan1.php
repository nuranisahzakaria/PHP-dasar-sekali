<?php 
//ARRAY
//variabel yg dapat menampung lebih dari satu nilai
	//array pada php dapat menampung berbagi nilai dengan tipe data berbeda
	//array adalah pasangan key dan value
		//key adalah pasangan indeks yg dimulai dari nol

//menampilkan array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu", 1, 2, 3, 4, 5, 6, 7, false, true];


//menampilkan array
	//1. menggunakan var_dump()
var_dump($hari);

echo "<br><br><br>";
	//2. menggunakan print_r()
print_r($hari);


echo "<br><br><br>";
//menampilkan 1 element pada array
			//menggunakan indeks si array
echo $hari[5];


echo "<br><br><br>";
//menambahkan elemen baru ke array

	//menambahkan nilai ke akhir dari array yg sudah dibuat
	$hari[] = "kamis";
	var_dump($hari);