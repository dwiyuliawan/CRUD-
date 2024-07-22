<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hamalan Katalog </title>
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
	$katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
?>
<body>
	<center>
		<a href="index.php">Buku</a> |
		<a href="penerbit.php">Penerbit</a> |
		<a href="pengarang.php">Pengarang</a> |
		<a href="katalog.php">Katalog</a>
	</center><hr>
	<a class="kotak" href="add_katalog.php">Add Katalog</a><br><br>
	<table class="table" width="80%" border="1"> 
		<tr>
			<th>Id</th>
			<th>Nama Katalog</th>
			<th>Aksi</th>
		</tr>
		<?php
			while ($katalog_data = mysqli_fetch_array($katalog)) {
				echo "<tr>";
				   echo "<td>".$katalog_data['id_katalog']."</td>";
				   echo "<td>".$katalog_data['nama']."</td>";
				   echo "<td><a class='btn btn-primary' href='edit_katalog.php?id_katalog=$katalog_data[id_katalog]'>Edit</a> | <a class='btn btn-danger' href='delete_katalog.php?id_katalog=$katalog_data[id_katalog]'>Delete</a></td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>