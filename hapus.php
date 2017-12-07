<?php
	require_once("koneksi.php");
	if($_POST['email']){
		$email = $_POST['email'];
		$pw = $_POST['password'];
		var_dump($pw);
		$sql= "INSERT INTO tlat VALUES('$email', '$pw')";
		mysqli_query($cn, $sql);		
	}
?>
