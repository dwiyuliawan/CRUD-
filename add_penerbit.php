<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Penerbit</title>
</head>
<body>
	<a href="penerbit.php">Back To Penerbit</a><br><br>
	<form action="add_penerbit.php" method="post">
		<table width="30%" border="0">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id_penerbit"></td>
			</tr>
			<tr>
				<td>Nama Penerbit</td>
				<td><input type="text" name="nama_penerbit"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="telp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="SUBMIT"></td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$id_penerbit = $_POST['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telepon = $_POST['telp'];
			$alamat = $_POST['alamat'];

			include_once("connect.php");
			$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`,`alamat`) VALUES ('$id_penerbit','$nama_penerbit','$email','$telepon', '$alamat');");

			header("Location: penerbit.php");
		}
	?>
</body>
</html>