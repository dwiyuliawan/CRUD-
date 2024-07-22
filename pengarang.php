<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Pengarang</title>
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
	$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
?>
<body>
	<center>
		<a href="index.php">Buku</a> |
		<a href="penerbit.php">Penerbit</a> |
		<a href="pengarang.php">Pengarang</a> |
		<a href="katalog.php">Katalog</a>
	</center><hr>

	<a class="kotak" href="add_pengarang.php">Add New Pengarang</a><br><br>
	<table width="80%" border="1" class="table">
		<tr>
			<th>Id</th>
			<th>Nama Pengarang</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php
			while ($pengarang_data = mysqli_fetch_array($pengarang)) {
				echo "<tr>";
				     echo "<td>".$pengarang_data['id_pengarang']."</td>";
				     echo "<td>".$pengarang_data['nama_pengarang']."</td>";
				     echo "<td>".$pengarang_data['email']."</td>";
				     echo "<td>".$pengarang_data['telp']."</td>";
				     echo "<td>".$pengarang_data['alamat']."</td>";
				     echo "<td><a class='btn btn-primary' href='edit_pengarang.php?id_pengarang=$pengarang_data[id_pengarang]'>Edit</a> | <a class='btn btn-danger' href='delete_pengarang.php?id_pengarang=$pengarang_data[id_pengarang]'>Delete</a></td>";
				echo "</tr>";
			}
		?>
</body>
</html>