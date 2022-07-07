<?php 
// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "mysita.com");

// cek apakah elemen didalam method post yg key [name] nya submit sudah pernah ditekan atau belum
if ( isset($_POST["submit"]) ){
	// ambil data dari tiap elemen dalam form
	$artist_name = $_POST["artist_name"];
	$artist_image = $_POST["artist_image"];
	$artist_biography = $_POST["artist_biography"];
	$artist_sosmed = $_POST["artist_sosmed"];
	$artist_fullname = $_POST["artist_fullname"];
	$artist_birth_date = $_POST["artist_birth_date"];
	$artist_birth_place = $_POST["artist_birth_place"];
	$artist_group = $_POST["artist_group"];
	$artist_occupation = $_POST["artist_occupation"];
	$artist_record_Label = $_POST["artist_record_Label"]

	// query insert data
		// parameter 2
		// 1. koneksi
		// 2. query insert data
	$query = "INSERT INTO mysita.com
				VALUES
			('','$artist_name', '$artist_image', '$artist_biography', '$artist_sosmed', '$artist_fullname', 
			'$artist_birth_date', '$artist_birth_place', '$artist_group', '$artist_occupation', '$artist_record_Label')

			";
	mysqli_query($conn, $query);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Artis</title>
</head>
<body>
	<h1>Tambah Data Artis</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="artist_name">artist_name : </label>
				<input type="text" name="artist_name" id="artist_name">
			</li>
			<li>
				<label for="artist_image">artist_image : </label>
				<input type="text" name="artist_image" id="artist_image">
			</li>
			<li>
				<label for="artist_biography">artist_biography : </label>
				<input type="text" name="artist_biography" id="artist_biography">
			</li>
			<!-- <li>
				<label for="artist_sosmed">artist_sosmed : </label>
				<input type="text" name="artist_sosmed" id="artist_sosmed">
			</li>
			<li>
				<label for="artist_fullname">artist_fullname : </label>
				<input type="text" name="artist_fullname" id="artist_fullname">
			</li>
			<li>
				<label for="artist_birth_date">artist_birth_date : </label>
				<input type="text" name="artist_birth_date" id="artist_birth_date">
			</li>
			<li>
				<label for="artist_birth_place">artist_birth_place : </label>
				<input type="text" name="artist_birth_place" id="artist_birth_place">
			</li>
			<li>
				<label for="artist_group">artist_group : </label>
				<input type="text" name="artist_group" id="artist_group">
			</li>
			<li>
				<label for="artist_occupation">artist_occupation : </label>
				<input type="text" name="artist_occupation" id="artist_occupation">
			</li>
			<li>
				<label for="artist_record_Label">artist_record_Label : </label>
				<input type="text" name="artist_record_Label" id="artist_record_Label">
			</li> -->
			<li>
				<button type="submit" name="submit">Tambah</button>
			</li>
		</ul>
	</form> 
</body>
</html>