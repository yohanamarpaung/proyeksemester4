<?php

session_start();

if( !isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

require 'functs.php';
$matakuliah = query("SELECT*FROM matakuliah");
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" type="image/png" size="16*16" href="https://www.upr.ac.id/assets/images/logo/0.png">
        <title>Daftar Mata Kuliah</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
    <h1 align="center" style="color:#4d0000">Data Matkul</h1>

    <a href="insertmk.php"><button type="button" class="btn btn-success">Tambah  Mata Kuliah</button></a>
    <a href="index.php"><button type="button" class="btn btn-primary">Kembali Ke Beranda</button></a>
    <br></br>


    <table class="table table-striped table-hover">
       
    <tr>
            <th>No.</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengampu</th>
            <th>Aksi</th>
        </tr>


        <?php $a=1; ?>
        <?php foreach ($matakuliah as $row ): ?> 
        <tr>
            <td><?= $a;?></td>
            <td><?= $row["nama_mk"]?></td>
            <td><?= $row["sks"]?></td>
            <td><?= $row["semester"]?></td>
            <td><?= $row["dosenpengampu"]?></td>
            <td>
                <a href="updatemk.php?id=<?=$row["id_mk"]?>" class="btn btn-info" role="button">Ubah</a> |
                <a href="deletemk.php?id=<?=$row["id_mk"]?>" class="btn btn-warning" role="button">Hapus</a>
            </td>
        </tr>
        <?php $a++;?>
        <?php endforeach; ?>
    </table>
    </body>
</html>