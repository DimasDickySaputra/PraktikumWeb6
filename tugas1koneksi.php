
<?php
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "db_bukutamu";
	$conn = mysqli_connect($servername, $username, $password, $dbname );
	//membuat koneksi
	if(!$conn) {
		die("Koneksi Gagal: " .mysqli_error());
	}
 ?>