<?php
	include_once("connect.php");
	$id_katalog = $_GET['id_katalog'];
	$katalg = mysqli_query($mysqli, "DELETE FROM katalog WHERE id_katalog ='$id_katalog'");
	header("Location:katalog.php");
?>