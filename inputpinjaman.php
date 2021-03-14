<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Input Pinjaman</title>
	<link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

	<table class="table1" border="0" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >Masukan Data Pinjaman</font></center>
    </tr>
		<br><br>
		<form action="" method="POST">
	<tr>
		<td>No Pinjaman</td>
		<td>: <input type="text" name="no_pinjaman" placeholder="Masukkan No Pinjaman" required></td>
	</tr>
	<tr>
		<td>Tanggal Pinjaman</td>
		<td>: <input type="text" name="tanggal_pinjaman" placeholder="Masukkan Tanggal Pinjaman" required></td>
	</tr>
	<tr>
		<td>Jumlah Pinjaman</td>
		<td>: <input type="text" name="jumlah_pinjaman" placeholder="Masukkan Jumlah Pinjaman" required></td>
	</tr>
	<tr>
		<td>Berapa X Angsuran</td>
		<td>: <input type="text" name="berapakali_ansuran" placeholder="Masukkan Berapa X Angsuran" required></td>
	</tr>
	<tr>
		<td></td>
		<td style="text-align: center;"><input type="submit" name="simpan" value="Simpan" /td>
	</tr>
	</table>
		<br><br><br>
		<center>
			<a href="pinjaman.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:2px;text-decoration:none;">🔃Kembali</a>
		</center>

<?php 
	include 'koneksi.php';
	if(isset($_POST['simpan'])){
	$insert = mysqli_query($conn, "INSERT INTO pinjaman VALUES 
		('".$_POST['no_pinjaman']."', 
		'".$_POST['tanggal_pinjaman']."',
		'".$_POST['jumlah_pinjaman']."',
		'".$_POST['berapakali_ansuran']."')");
	 if($insert){
	 	echo 'Data Berhasil Di Simpan';
	 }else{
	 	echo 'Data Gagal Di Simpan';
	 }
	 }
?>

</body>
</html>