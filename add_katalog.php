<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Katalog</title>
</head>
<body>
	<a href="katalog.php">Go To Katalog</a><br><br>
	<form action="add_katalog.php" method="post">
		<table width="30%" border="0" class="table">
			<tr>
				<td>ID</td>
				<td><input type="text" name="id_katalog"></td>
			</tr>
			<tr>
				<td>Nama Katalog</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="ADD KATALOG"></td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$id_katalog = $_POST['id_katalog'];
			$nama = $_POST['nama'];

			include_once("connect.php");
			$result = mysqli_query($mysqli, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id_katalog', '$nama');");
			header("Location:katalog.php");
		}
	?>
</body>
</html>