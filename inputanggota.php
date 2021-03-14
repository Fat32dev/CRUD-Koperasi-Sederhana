<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Input Data Anggota</title>
	<link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

	<table class="table1" border="0" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >Input Data Anggota</font></center>
    </tr>
		<br><br>
		<form action="" method="POST">
	<tr>
		<td>No Anggota</td>
		<td>: <input type="text" name="no_anggota" placeholder="Masukkan No Anggota" required></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>: <input type="text" name="nama" placeholder="Masukkan Nama" required></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>: <input type="text" name="jeniskelamin" placeholder="Masukkan Jenis Kelamin" required></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>: <input type="text" name="alamat" placeholder="Masukkan Alamat" required></td>
	</tr>
	<tr>
		<td></td>
		<td style="text-align: center;"><input type="submit" name="simpan" value="Simpan" /td>
	</tr>
	</table>
		<br><br><br>
		<center>
			<a href="index.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:2px;text-decoration:none;">🔃Kembali</a>
		</center>
	
<?php 
	include 'koneksi.php';
	if(isset($_POST['simpan'])){
		$insert = mysqli_query($conn, "INSERT INTO anggota VALUES 
			('".$_POST['no_anggota']."', 
			'".$_POST['nama']."',
			'".$_POST['jeniskelamin']."',
			'".$_POST['alamat']."')");
	if($insert){
		echo 'Data Berhasil Di Simpan';
	}else{
	 	echo 'Data Gagal Di Simpan';
	}
	}
?>

</body>
</html>