<html>
	<head>
	<title>Borang Pendaftaran</title>
	</head>
	<style>
	h2 {
		text-align: center;
		padding-top: 20px;
	}
	body {
		background-color: #FFDFD3; /* warna background sistem */
	}
	</style>
	<body>
	<center>
	<h2>Borang Pendaftaran</h2>
	<table border=0 cellpadding=5 cellspacing=1 bgcolor=white style="padding:20px;border-top:1px solid black; border-left:2px solid black; border-right:2px solid black; border-bottom:1px solid black; border-radius:10px">
	
	<form action="" method="post">
	<tr>
		<td>Nama</td><td>:</td><td> <input type="text" name="nama" required><br><br></td>
	</tr>
	<tr>
		<td>No Kad Pengenalan</td><td>:</td><td> <input type="number" name="nokp" required><br><br></td>
	</tr>
	<tr>
		<td>E-mail</td><td>:</td><td> <input type="email" name="email" required><br><br></td>
	</tr>
	<tr>
		<td colspan=3><center><input type="Submit" name="hantar" value="Hantar"><br></td>
	</tr>
	</form>
	</tr>
	</table>
	</body>


<!--memproses input yang dimasukkan ke dalam db-->

<?php
	include('config.php'); //membuat sambungan ke db
	if (isset($_POST['hantar'])){
	$nama=$_POST["nama"]; //pemboleh ubah untuk ditarik daripada db
	$nokp=$_POST["nokp"]; 
	$email=$_POST["email"];
	
	mysqli_query($connect, "INSERT INTO daftar SET nama = '$nama' , nokp = '$nokp' , email = '$email' ");
	header('Location:index.html');
	}
?>










</html>
