<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Penerbit</title>
</head>
<?php
	include_once("connect.php");
	$id_penerbit = $_GET['id_penerbit'];

	$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit = '$id_penerbit'");
	while ($penerbit_data = mysqli_fetch_array($penerbit)) {
		$id_penerbit = $penerbit_data['id_penerbit'];
		$nama_penerbit = $penerbit_data['nama_penerbit'];
		$email = $penerbit_data['email'];
		$telp = $penerbit_data['telp'];
		$alamat = $penerbit_data['alamat'];
	}
?>
<body>
	<a href="penerbit.php">Go To Penerbit</a><br><br>
	<form action="edit_penerbit.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post">
		<table width="30%" border="0">
			<tr>
				<td>ID</td>
				<td style="font-size: 13pt"><?php echo $id_penerbit; ?></td>
			</tr>
			<tr>
				<td>Nama Penerbit</td>
				<td><input type="text" name="nama_penerbit" value="<?php echo $nama_penerbit; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="telp" value="<?php echo $telp; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="EDIT"></td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST['update'])) {
			$id_penerbit = $_GET['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];

			include_once("connect.php");
			$result = mysqli_query($mysqli, "UPDATE penerbit SET  nama_penerbit='$nama_penerbit', email='$email', telp='$telp', alamat='$alamat' WHERE id_penerbit = '$id_penerbit'");

			header("Location: penerbit.php");
		}
	?>
</body>
</html>