<?php 

	// koneksi ke database
			// Untuk koneksi, butuh beberapa parameter didlm functionnya, urutan parameternya ga boleh salah
			// 1. yg pertama menggunakan string kita tulis nama host daridatabase kita => localhost
			// 2. username mysql nya, username default adalah => root
			// 3. password => kosong
			// 4. nama database
// agar mudah memanggilnya, masukkan nilainya kedalam variabel
$conn = mysqli_connect("localhost", "root", "", 
		"keluarga");

// mengambil data
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



function tambah($data){
	global $conn;
	$nama = $data["nama"];
	$umur = $data["umur"];
	$alamat = $data["alamat"];
	$pekerjaan = $data["pekerjaan"];
	$gambar = $data["gambar"];	


	// query insert data
	$query = "INSERT INTO keluarga
				VALUES
				-- id kosongkan karena diisi otomatis
				('', '$nama', '$umur', '$alamat', '$pekerjaan', '$gambar') 
				";

	mysqli_query($conn, $query);

// cek apakah data berhasil ditambahkan atau tidak
	return mysqli_affected_rows($conn);

}
?>