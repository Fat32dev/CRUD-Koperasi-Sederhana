<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpanan Sisa</title>
    <link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

    <table class="table1" border="3" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >Data Simpanan</font></center>
    </tr>
        <br>
            <tr>
                <center>
                    <a href="inputsimpanan.php" style="padding:0.2% 0.4%;background-color :#f8cd05; color:#fff;border-radius:2px;text-decoration:none;">➕Tambah Data</a>  |
                    <a href="index.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:2px;text-decoration:none;">🔃Kembali</a>
                </center>
            </tr>
        <br>
    <tr>
        <th>No</th>
        <th>No Transaksi</th>
        <th>Nama</th>
        <th>Saldo</th>
        <th>Keterangan</th>
        <th>Opsi</th>
    </tr>

<?php 
    include 'koneksi.php';
        $no =1;
        // $select = mysqli_query($conn, "SELECT * FROM simpanan");
                // query inner join 2 tabel
                $select = mysqli_query($conn, "SELECT * FROM simpanan INNER JOIN anggota ON anggota.no_anggota = simpanan.no_transaksi");
    if(mysqli_num_rows($select) > 0){
    while($hasil3 = mysqli_fetch_array($select)){
?>

    <tr style="text-align: center;">
        <td><?php echo $no++ ?></td>
        <td><?php echo $hasil3['no_transaksi'] ?></td>
        <td><?php echo $hasil3['nama'] ?></td>
        <td><?php echo $hasil3['saldo'] ?></td>
        <td><?php echo $hasil3['keterangan'] ?></td>
        <td>
            <a href="editsimpanan.php?no_transaksi=<?php echo $hasil3['no_transaksi'] ?>">Edit</a> |
            <a href="deletesimpanan.php?no_transaksi=<?php echo $hasil3['no_transaksi'] ?>">❌Delete</a>
        </td>
    </tr>
       
<?php }}else{ ?>
    <tr>
        <td colspan="6" align="center">data none</td>
    </tr>
<?php } ?>

    </table>
</body>
</html>