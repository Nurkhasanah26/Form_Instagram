<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
<!-- membuat koneksi -->
<?php 
	require_once("koneksi.php");
	//query
	//hapus dulu
	$email = "";
	if(isset($_GET['email']))
		$email = $_GET['email'];
	$qry = mysqli_query($cn,"DELETE FROM tlogin WHERE email = '$email'");
	$qry = mysqli_query($cn,"SELECT * FROM tlogin");
	//hasil
?>
	<a href="formulir.php">Input Data</a>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Email</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
<?php
	$nomor = 1;
	while($row = mysqli_fetch_array($qry)){
?>
	<tr>
		<td><?php echo $nomor++; ?></td>
		<td><?php echo $row["email"] ?></td>
		<td><?php echo $row["password"] ?></td>
		<td><a href="http://localhost/aic/tampil.php?email=<?php echo $row['email'] ?>">Hapus</a></td>
	</tr>
<?php
	}
 ?>
	</table>
</body>
</html>
