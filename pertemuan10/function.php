<?php 
// koneksi kedatabase
	// terdapat 4 parameter
		// 1. string nama host dari database
		// 2. username mysqli default => root
		// 3. password => kosong
		// 4. nama database
$conn = mysqli_connect("localhost", "root", " ", "mysita.com");



function query ($query){
	global $conn;
	// ambil data dari tabel (query)
	// terdapat 2 parameter
		// 1. koneksi
		// 2. queri (sintaks sql)
	$result = mysqli_query($conn, $query);
	$rows = [];
				// ambil data (fetch) artist dari result
	while ( $row = mysqli_fetch_assoc($result) ){
		
		// menambahkan elemen baru ke array associative
		$rows[] = $row;
	}
	return $rows;
}

?>