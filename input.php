<?php
	require_once "koneksi.php";

	$emaiil=$_POST['emaiil'];
	$pw=$_POST['pw'];

	mysqli_query($cn,"INSERT INTO tlogin values ('$emaiil','$pw')");

	header('location: tampil.php');
?>
