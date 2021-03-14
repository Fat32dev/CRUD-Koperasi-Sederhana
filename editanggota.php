<?php 
	include 'koneksi.php';
	$edit = mysqli_query($conn, "SELECT * FROM anggota WHERE nama = '".$_GET['nama']."'");
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
        <center><font size="7" face="Century Gothic" >Ubah Data Anggota</font></center>
    </tr>
		<br><br>
		<form action="" method="POST">
	<tr>
		<td>No Anggota</td>
		<td>: <input type="text" name="no_anggota" value="<?php echo $result['no_anggota'] ?>" required></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>: <input type="text" name="nama" value="<?php echo $result['nama'] ?>" required></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>: <input type="text" name="jeniskelamin" value="<?php echo $result['jeniskelamin'] ?>"  required></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>: <input type="text" name="alamat"  value="<?php echo $result['alamat'] ?>"  required></td>
	</tr>
	<tr>
		<td></td>
		<td style="text-align: center;"><input type="submit" name="edit" value="Simpan" /td>
	</tr>
	</table>
		<br><br><br>
		<center>
			<a href="index.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:2px;text-decoration:none;">🔃Kembali</a>
		</center>

<?php 
	include 'koneksi.php';
	if(isset($_POST['edit'])){
		$update = mysqli_query($conn, "UPDATE anggota SET 
		no_anggota = '".$_POST['no_anggota']."',
		nama = '".$_POST['nama']."',
		jeniskelamin = '".$_POST['jeniskelamin']."',
		alamat = '".$_POST['alamat']."'
		WHERE nama = '".$_GET['nama']."'");
	if($update){
		echo 'Data Berhasil Di Edit';
	}else {
		echo 'Data Gagal Di Edit';
	}
	}
?>
	
</body>
</html>