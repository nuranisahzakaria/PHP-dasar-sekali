<?php 
// VARIABLE SCOOPE / LINGKUP VARIABEL

//membuat variabel lokal untuk 1 file
$x = 10;

function tampilx(){
	//lingkup variabel x didlm funtion berbeda dg variabel x diluar function, meskipun namanya sama 
	//karena variabel yg kita buat di function hanya beerlaku didalam funtion itu saja
	$x = 20;
	echo $x;

}
tampilx(); // YG tampil 20 => yaitu variabel x didalam funcion
echo "<br>";
echo $x;   // YG tampil 10 => yaitu variabel x diluar funtion




//----------------------------------------------------------------//

echo "<br><br><br>";
echo "<----------------variabel global-------------------->";
echo "<br><br>";
//bagaimana supaya variabel diluar function dapat juga dijalankan didalam function?
// caranya yaitu => menggunakan keyword global

//BUAT FUNCTION 1 LAGI SBG CONTOH


function ambilx () {
	global $x;
	echo $x;
}
ambilx();


?>