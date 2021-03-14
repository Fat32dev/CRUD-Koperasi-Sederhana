<?php 
	include 'koneksi.php';
	if(isset($_GET['nama'])){
		$delete = mysqli_query($conn, "DELETE FROM anggota WHERE nama = '".$_GET['nama']."'");
		header('location:index.php');

	}
 ?>