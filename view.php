<?php
    session_start();
    $form_error = '';
?>
 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

    <table class="table1" border="3" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >View</font></center>
    </tr>
    <tr>
        <br>
            <tr>
                <center>
                <a href="index.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:2px;text-decoration:none;">🔃Kembali</a>
                </center>
            </tr>
        <br>
    </tr>
    <tr>
        <th>No Anggota</th>
        <th >Nama</th>
        <th >Jenis Kelamin</th>
        <th width="2" align="left">Alamat</th>
        <th >Opsi</th>
    </tr>
           
<?php 
    include 'koneksi.php';
        $no =1;
        $select = mysqli_query($conn, "SELECT * FROM almtsidayu");

    if(mysqli_num_rows($select) > 0){
    while($hasil = mysqli_fetch_array($select)){
?>

    <tr>
        <td><?php echo $hasil['no_anggota'] ?></td>
        <td><?php echo $hasil['nama'] ?></td>
        <td><?php echo $hasil['jeniskelamin'] ?></td>
        <td><?php echo $hasil['alamat'] ?></td>
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