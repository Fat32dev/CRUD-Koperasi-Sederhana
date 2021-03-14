<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjaman Koperasi</title>
    <link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

    <table class="table1" border="3" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >Data Pinjaman</font></center>
    </tr>
    <tr>
        <br>
            <tr>
                <center>
                    <a href="inputpinjaman.php" style="padding:0.2% 0.4%;background-color :#f8cd05; color:#fff;border-radius:2px;text-decoration:none;">➕Tambah Data</a>  |
                    <a href="index.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:2px;text-decoration:none;">🔃Kembali</a>
                </center>
            </tr>
        <br>
    </tr>
    <tr>
        <th width="1" align="left">No</th>
        <th>No Pinjaman</th>
        <th>Nama</th>
        <th>Tanggal Pinjaman</th>
        <th>Jumlah Pinjaman</th>
        <th>Jumlah Angsuran</th>
        <th>Opsi</th>
    </tr>
    
<?php 
    include 'koneksi.php';
        $no =1;
        // $select = mysqli_query($conn, "SELECT * FROM pinjaman");
        // query inner join 2 tabel
        $select = mysqli_query($conn, "SELECT * FROM pinjaman INNER JOIN anggota ON anggota.no_anggota = pinjaman.no_pinjaman");
    if(mysqli_num_rows($select) > 0){
    while($hasil = mysqli_fetch_array($select)){
?>

    <tr style="text-align: center;">
        <td><?php echo $no++ ?></td>
        <td><?php echo $hasil['no_pinjaman'] ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['tanggal_pinjaman'] ?></td>
        <td><?php echo $hasil['jumlah_pinjaman'] ?></td>
        <td><?php echo $hasil['berapakali_ansuran'] ?></td>
        <td>
            <a href="editpinjaman.php?no_pinjaman=<?php echo $hasil['no_pinjaman'] ?>">Edit</a> |
            <a href="deletepinjaman.php?no_pinjaman=<?php echo $hasil['no_pinjaman'] ?>">❌Delete</a>
        </td>
    </tr>
       
<?php }}else{ ?>
    <tr>
        <td colspan="6" align="center">DATA KOSONG</td>
    </tr>
<?php } ?>

    </table>
</body>
</html>