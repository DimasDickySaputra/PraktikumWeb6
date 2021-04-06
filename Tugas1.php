<!DOCTYPE html>
<html>
<head>
	<title>membuat form ala Dimas Dicky Saputra</title>
	<style type="text/css">
		.form {
			max-width: 500px;
			max-height: 750px;
			margin: auto;
		}
		.field_set {
			border-color: salmon;
			background-color: #e2ffff;
			padding-top: 15px
		}
		.form label {
			width: 100px;
			font-weight: bold;
			font-size: 13px;
			text-shadow: 1px 1px 1px 
			margin-bottom: 10px;
			margin-right: 10px;
		}
		.form input[type=text]{
			border: 1px solid;
			margin-right: 9px;
		}
		.input {
			margin-left: 3px;
		}
		.textarea {
			width: 300px;
			height: 125px;
		}
		.legend {
			width: 70px;
            padding: 2px;
            margin-left: calc(50% - 35px - 8px);
		}
	</style>
</head>
<body>
	<h1 align="center">Form HTML</h1>
	<div class="form">
	<form action="tugas1proses.php" method="post">
		<fieldset class="field_set">
			<legend>Buku Tamu</legend>
			<label>Name:</label><input type="text" name="Nama" placeholder="Masukkan Nama anda">
			<br>
			<br>
			<label>Email:</label><input type="text" name="Email" placeholder="Masukkan Email anda">
			<br>
			<br>
			<label>Isi:</label><textarea class="textarea" name="Isi" placeholder="Masukkan Komentar anda"></textarea><input class="input" type="submit" name="kirim" value="kirim" >
		</fieldset>
	</form>
	</div>
</body>
</html>