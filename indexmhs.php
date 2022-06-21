<?php

session_start();

if( !isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

require 'functs.php';
$mahasiswa = query("SELECT*FROM mahasiswa");

?>
<!DOCTYPE html>
<html >
    <head>
    <link rel="icon" type="image/png" size="16*16" href="https://www.upr.ac.id/assets/images/logo/0.png">
        <title>Daftar Mahasiswa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  </head>
    <body>

    <h1 align="center" style="color:#4d0000">Data Mahasiswa</h1>

    <a href="insertmhs.php"><button type="button" class="btn btn-success">Tambah Data Mahasiswa</button></a>
    <a href="index.php"><button type="button" class="btn btn-primary">Kembali Ke Beranda</button></a>
    <br></br>

    <table class="table table-striped table-hover"; >

    <tr>
            <th><center>No.</center></th>
            <th><center>Nama Mahasiswa</center></th>
            <th><center>NIM</center></th>
            <th><center>Jurusan</center></th>
            <th>Aksi</th>
        </tr>


        <?php $a=1; ?>
        <?php foreach ($mahasiswa as $row ): ?> 
        <tr>
            <td><center><?= $a;?></center></td>
            <td><center><?= $row["nama_mahasiswa"]?></center></td>
            <td><center><?= $row["nim"]?></center></td>
            <td><center><?= $row["jurusan"]?></center></td>
            <td>
               
                <a href="updatemhs.php?id= <?=$row["id"];?>" class="btn btn-info" role="button">Ubah</a> |
               
                <a href="deletemhs.php?id= <?=$row["id"];?>" class="btn btn-warning" role="button">hapus</a> 
               
            </td>
        </tr>
        <?php $a++;?>
        <?php endforeach; ?>
    </table>
    </body>
</html >