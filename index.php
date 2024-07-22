<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<style>
		center{
			padding-top: 20px;
		}
        a {
            border : 1px solid #007bff;
            background : #007bff;
            padding: 10px;
            color:white;
            text-decoration: none;
            border-radius: 6px;
        }

        a:hover{
            background:white;
            color:  black;
        }
        a.kotak{
            border : 1px solid #cec7c7;
            background : #cec7c7;
            padding: 10px;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        .kotak:hover {
            background: white;
            color:  black;
        }
    </style>
<?php
	include_once("connect.php");
	$buku = mysqli_query($mysqli, "SELECT buku.*, nama_penerbit, nama_pengarang, katalog.nama as nama_katalog FROM buku
 									JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
 									JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
 									JOIN katalog ON katalog.id_katalog = buku.id_katalog");
?>
<body>
	<center>
		<a href="index.php">Buku</a> |
		<a href="penerbit.php">Penerbit</a> |
		<a href="pengarang.php">Pengarang</a> |
		<a href="katalog.php">Katalog</a>
	</center><hr>

	<a class="kotak" href="add.php">Add New Buku</a><br><br>
	<table class="table" width="80%" border="1">
		<tr>
			<th>ISBN</th>
			<th>Judul</th>
			<th>Tahun</th>
			<th>Penerbit</th>
			<th>Pengarang</th>
			<th>Katalog</th>
			<th>Stok</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
		<?php
			while ($buku_data = mysqli_fetch_array($buku)) {
				echo "<tr>";
				  	echo "<td>".$buku_data['isbn']."</td>";
				  	echo "<td>".$buku_data['judul']."</td>";
				  	echo "<td>".$buku_data['tahun']."</td>";
				  	echo "<td>".$buku_data['nama_penerbit']."</td>";
				  	echo "<td>".$buku_data['nama_pengarang']."</td>";
				  	echo "<td>".$buku_data['nama_katalog']."</td>";
				  	echo "<td>".$buku_data['qty_stok']."</td>";
				  	echo "<td>".$buku_data['harga_pinjam']."</td>";
				  	echo "<td><a class='btn btn-primary' href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>