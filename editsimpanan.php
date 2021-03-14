<?php 
	include 'koneksi.php';
	$edit = mysqli_query($conn, "SELECT * FROM simpanan WHERE no_transaksi = '".$_GET['no_transaksi']."'");
	$result = mysqli_fetch_array($edit);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Data Anggota</title>
	<link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

	<table class="table1" border="0" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >Ubah Data Simpanan</font></center>
    </tr>
		<br><br>
		<form action="" method="POST">
	<tr>
		<td>No Transaksi</td>
		<td>: <input type="text" name="no_transaksi" value="<?php echo $result['no_transaksi'] ?>" required></td>
	</tr>
	<tr>
		<td>Saldo</td>
		<td>: <input type="text" name="saldo" value="<?php echo $result['saldo'] ?>" required></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td>: <input type="text" name="keterangan" value="<?php echo $result['keterangan'] ?>"  required></td>
	</tr>
	<tr>
		<td></td>
		<td style="text-align: center;"><input type="submit" name="edit" value="Simpan" /td>
	</tr>
	</table>
		<br><br><br>
		<center>
			<a href="simpanan.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:2px;text-decoration:none;">🔃Kembali</a>
		</center>

<?php 
	include 'koneksi.php';
	if(isset($_POST['edit'])){
		$update = mysqli_query($conn, "UPDATE simpanan SET 
		no_transaksi = '".$_POST['no_transaksi']."',
		saldo = '".$_POST['saldo']."',
		keterangan = '".$_POST['keterangan']."'
		WHERE no_transaksi = '".$_GET['no_transaksi']."'");
	if($update){
		echo 'Data Berhasil Di Edit';
	}else {
		echo 'Data Gagal Di Edit';
	}
	}
?>
	
</body>
</html>