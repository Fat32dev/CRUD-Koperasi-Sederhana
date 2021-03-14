<?php 
	include 'koneksi.php';
	if(isset($_GET['no_transaksi'])){
		$delete = mysqli_query($conn, "DELETE FROM simpanan WHERE no_transaksi = '".$_GET['no_transaksi']."'");
		header('location:simpanan.php');

	}
 ?>