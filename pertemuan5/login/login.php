<?php 
//cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"]) ) {

//cek username dan pasword
	if ( $_POST["username"] == "admin" && $_POST["password"] == "123") {

//jika benar, redirect ke halaman admnin
		header("Location: admin.php");
		exit;
	} else {
//jika salah, tampilkan pesan kesalahan
		$error =true;
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login Admin</h1>
<?php if ( isset($error) ) : ?>
	<p style="color: red; font-weight: bold; font-style: italic; ">Username / Password salah</p>
<?php endif ?>
	<ul>
		<form action="" method="post">
			<li>
				<!-- for dan id untuk memberi tahu html bahwa kedua tag tsb berhubungan -->
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password :  </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="submit">Login</button>
			</li>
		</form>
	</ul>
</body>
</html>