<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Penerbit</title>
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
	$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
?>
<body>
	<center>
		<a href="index.php">Buku</a> |
		<a href="penerbit.php">Penerbit</a> |
		<a href="pengarang.php">Pengarang</a> |
		<a href="katalog.php">Katalog</a>
	</center><hr>

	<a class="kotak" href="add_penerbit.php">Add New Penerbit</a><br><br>
	<table width="80%" border="1" class="table">
		<tr>
			<th>Id</th>
			<th>Nama Penerbit</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php
			while ($penerbit_data = mysqli_fetch_array($penerbit)) {
				echo "<tr>";
					echo "<td>".$penerbit_data['id_penerbit']."</td>";
					echo "<td>".$penerbit_data['nama_penerbit']."</td>";
					echo "<td>".$penerbit_data['email']."</td>";
					echo "<td>".$penerbit_data['telp']."</td>";
					echo "<td>".$penerbit_data['alamat']."</td>";
					echo "<td><a class='btn btn-primary' href='edit_penerbit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a class='btn btn-danger' href='delete_penerbit.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>