<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Katalog</title>
</head>
<?php
	include_once("connect.php");
	$id_katalog = $_GET['id_katalog'];
	$katalog = mysqli_query($mysqli, "SELECT * FROM katalog WHERE id_katalog = '$id_katalog'");
	while ($katalog_data = mysqli_fetch_array($katalog)) {
		$id_katalog = $katalog_data['id_katalog'];
		$nama = $katalog_data['nama'];
	}
?>
<body>
	<a href="katalog.php">Go TO Katalog</a><br><br>
	<form action="edit_katalog.php?id_katalog=<?php echo $id_katalog; ?>" method="post">
		<table width="30%" border="0">
			<tr>
				<td>ID</td>
				<td style="font-size: 13pt"><?php echo $id_katalog; ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="UPDATE"></td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST['update'])) {
			$id_katalog = $_GET['id_katalog'];
			$nama = $_POST['nama'];
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE katalog SET nama='$nama' WHERE id_katalog = '$id_katalog'");
			header("Location:katalog.php");
		}
	?>
</body>
</html>