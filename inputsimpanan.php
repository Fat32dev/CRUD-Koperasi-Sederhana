<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Simpanan</title>
	<link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

	<table class="table1" border="0" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >Masukan Data Simpanan</font></center>
    </tr>
		<br><br>
		<form action="" method="POST">
	<tr>
		<td>No Transaksi</td>
		<td>: <input type="text" name="no_transaksi" placeholder="Masukkan No Transaksi" required></td>
	</tr>
	<tr>
		<td>Saldo</td>
		<td>: <input type="text" name="saldo" placeholder="Masukkan Saldo" required></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td>: <input type="text" name="keterangan" placeholder="Masukkan Jenis Kelamin" required></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="simpan" value="Simpan" /td>
	</tr>
	</table>
		<br><br><br>
		<center>
			<a href="simpanan.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:2px;text-decoration:none;">🔃Kembali</a>
		</center>

<?php 
	include 'koneksi.php';
	if(isset($_POST['simpan'])){
	$insert = mysqli_query($conn, "INSERT INTO simpanan VALUES 
		('".$_POST['no_transaksi']."', 
		'".$_POST['saldo']."',
	    '".$_POST['keterangan']."')");
	 if($insert){
	 	echo 'Data Berhasil Di Simpan';
	 }else{
	 	echo 'Data Gagal Di Simpan';
	 }
	 }
?>

</body>
</html>