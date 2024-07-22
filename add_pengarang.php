<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buat Pengarang</title>
</head>
<?php
	include_once("connect.php");
	$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
?>
<body>
	<a href="pengarang.php">Go To Pengarang</a><br><br>
	<form action="add_pengarang.php" method="post">
		<table width="30%" border="0">
			<tr>
				<td>ID</td>
				<td><input type="text" name="id_pengarang"></td>
			</tr>
			<tr>
				<td>Nama Pengarang</td>
				<td><input type="text" name="nama_pengarang"></td>
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
				<td><input type="submit" name="submit" value="ADD PENGARANG"></td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST['submit'])) {
			$id_pengarang = $_POST['id_pengarang'];
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];

			include_once("connect.php");
			$result = mysqli_query($mysqli, "INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`) VALUES ('$id_pengarang', '$nama_pengarang','$email','$telp','$alamat');");
			header("Location: pengarang.php");
		}
	?>
</body>
</html>