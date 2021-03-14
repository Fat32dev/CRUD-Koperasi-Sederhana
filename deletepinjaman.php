<?php 
	include 'koneksi.php';
	if(isset($_GET['no_pinjaman'])){
		$delete = mysqli_query($conn, "DELETE FROM pinjaman WHERE no_pinjaman = '".$_GET['no_pinjaman']."'");
		header('location:pinjaman.php');

	}
 ?>