<?php
    session_start();
    $form_error = '';
?>
 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOPERASI ID</title>
    <link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

    <table class="table1" border="3" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >Koperasi id</font></center>
    </tr>
    <tr>
        <br>
            <tr>
                <center>
                    <a href="inputanggota.php" style="padding:0.2% 0.4%;background-color :#f8cd05; color:#fff;border-radius:2px;text-decoration:none;">➕ Tambah Data</a> | 
                    <a href="pinjaman.php" style="padding:0.2% 0.4%;background-color :#f8cd05; color:#fff;border-radius:2px;text-decoration:none;">🔜 Pinjaman</a> | 
                    <a href="simpanan.php" style="padding:0.2% 0.4%;background-color :#f8cd05; color:#fff;border-radius:2px;text-decoration:none;">🔜 Simpanan</a>
                    <a href="view.php" style="padding:0.2% 0.4%;background-color :#f8cd05; color:#fff;border-radius:2px;text-decoration:none;">🔜 View</a>
                </center>
            </tr>
        <br>
    </tr>
    <tr>
        <!-- <th width="2" align="left">No</th> -->
        <th>No</th>
        <th >Nama Anggota</th>
        <th >Jenis Kelamin</th>
        <th width="2" align="left">Alamat</th>
        <!-- <th >Saldo</th> -->
        <!-- <th>Jumlah Pinjaman</th> -->
        <th >Opsi</th>
    </tr>
           
<?php 
    include 'koneksi.php';
        $no =1;

        // query normal
        $select = mysqli_query($conn, "SELECT * FROM anggota");
        // query inner join 2 tabel
        // $select = mysqli_query($conn, "SELECT * FROM anggota INNER JOIN simpanan ON simpanan.no_transaksi = anggota.no_anggota");
        // query inner join 3 tabel
        // $select = mysqli_query($conn, "SELECT * FROM anggota INNER JOIN simpanan ON simpanan.no_transaksi = anggota.no_anggota INNER JOIN pinjaman ON pinjaman.jumlah_pinjaman");
    
    if(mysqli_num_rows($select) > 0){
    while($hasil = mysqli_fetch_array($select)){
?>

    <tr>
        <!-- <td><?php echo $no++ ?></td> -->
        <td><?php echo $hasil['no_anggota'] ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['jeniskelamin'] ?></td>
        <td><?php echo $hasil['alamat'] ?></td>
        <!-- <td><?php echo $hasil['saldo'] ?></td> -->
        <!-- <td><?php echo $hasil['jumlah_pinjaman'] ?></td> -->
        <td>
            <a href="editanggota.php?nama=<?php echo $hasil['nama'] ?>">Edit</a> |
            <a href="deleteanggota.php?nama=<?php echo $hasil['nama'] ?>">❌Delete</a>
        </td>
    </tr>
       
<?php }} else{ ?>
    <tr>
        <td colspan="6" align="center">Data None</td>
    </tr>
<?php } ?>
    
    </table>

</body>
</html>