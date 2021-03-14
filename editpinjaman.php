<?php 
	include 'koneksi.php';
	$edit = mysqli_query($conn, "SELECT * FROM pinjaman WHERE no_pinjaman = '".$_GET['no_pinjaman']."'");
	$result = mysqli_fetch_array($edit);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Data Pinjaman</title>
	<link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

	<table class="table1" border="0" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >Ubah Data Pinjaman</font></center>
    </tr>
		<br><br>
		<form action="" method="POST">
	<tr>
		<td>No Pinjaman</td>
		<td>: <input type="text" name="no_pinjaman" value="<?php echo $result['no_pinjaman'] ?>" required></td>
	</tr>
	<tr>
		<td>Tanggal Pinjaman</td>
		<td>: <input type="text" name="tanggal_pinjaman" value="<?php echo $result['tanggal_pinjaman'] ?>" required></td>
	</tr>
	<tr>
		<td>Jumlah Pinjaman</td>
		<td>: <input type="text" name="jumlah_pinjaman" value="<?php echo $result['jumlah_pinjaman'] ?>"  required></td>
	</tr>
	<tr>
		<td>Jumlah Angsuran</td>
		<td>: <input type="text" name="berapakali_ansuran"  value="<?php echo $result['berapakali_ansuran'] ?>"  required></td>
	</tr>
	<tr>
		<td></td>
		<td style="text-align: center;"><input type="submit" name="edit" value="Simpan" /td>
	</tr>
	</table>
		<br><br><br>
		<center>
			<a href="pinjaman.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:2px;text-decoration:none;">🔃Kembali</a>
		</center>

<?php 
	include 'koneksi.php';
	if(isset($_POST['edit'])){
		$update = mysqli_query($conn, "UPDATE pinjaman SET 
		no_pinjaman = '".$_POST['no_pinjaman']."',
		tanggal_pinjaman = '".$_POST['tanggal_pinjaman']."',
		jumlah_pinjaman = '".$_POST['jumlah_pinjaman']."',
		berapakali_ansuran = '".$_POST['berapakali_ansuran']."'
		WHERE no_pinjaman = '".$_GET['no_pinjaman']."'");
	if($update){
		echo 'Data Berhasil Di Edit';
	}else {
		echo 'Data Gagal Di Edit';
	}
	}
?>
	
</body>
</html>