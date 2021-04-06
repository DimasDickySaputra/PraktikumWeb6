<?php 
	include ("tugas1koneksi.php");
	$nama = $_POST['Nama'];
	$email = $_POST['Email'];
	$isi = $_POST['Isi'];
	//query untuk menambahkan data
	$sql =("INSERT INTO bukutamu (NAMA, EMAIL, ISI) VALUES('$nama', '$email', '$isi')");

	if (mysqli_query($conn,$sql)) {
		echo "Berhasil merekam data";
	}
	else {
		echo "error: ".$sql . "<br>" .mysqli_error($conn);
	}
	mysqli_close($conn);
 ?>