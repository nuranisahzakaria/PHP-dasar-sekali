<?php 

	// koneksi ke database
			// Untuk koneksi, butuh beberapa parameter didlm functionnya, urutan parameternya ga boleh salah
			// 1. yg pertama menggunakan string kita tulis nama host daridatabase kita => localhost
			// 2. username mysql nya, username efault adalah => root
			// 3. password => kosong
			// 4. nama database
// agar mudah memanggilnya, masukkan nilainya kedalam variabel
$conn = mysqli_connect("localhost", "root", "", "keluarga");

function query($query) {
	global $conn;
						// parameternya ada 2 yaitu koneksi string query
	$result = mysqli_query($conn, "SELECT * FROM keluarga");
	// siapin wadah kosong => $rows [PAKE S]
	$rows = [];
		// $row => nilai yg diambil setiap loopingnya [TANPA S]
	while( $row = mysqli_fetch_assoc($result)) {
		// ambil nilai simpan di $rows [ambil baju simpan di kotak]
		$rows[] = $row;
	}
	return $rows;
}
?>