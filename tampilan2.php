<?php


require 'functs.php';
$all = query("SELECT *FROM tampilan");
?>

<!DOCTYPE html>
<html >
    <head>
    <link rel="icon" type="image/png" size="16*16" href="https://www.upr.ac.id/assets/images/logo/0.png">
        <title>Nilai Mata Kuliah</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
    <h1 align="center" style="color:#4d0000">Daftar Nilai Mata Kuliah Mahasiswa</h1>

    <a href="indexpengunjung.php"><button type="button" class="btn btn-primary">Kembali Ke Beranda</button></a>
    <br></br>




    <table class="table table-striped table-hover">
       
    <tr>
            <th>No.</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengampu</th>
            <th>Nilai tugas</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Jurusan</th>
        </tr>


        <?php $a=1; ?>
        <?php foreach ($all as $row ): ?> 
        <tr>
            <td><?= $a;?></td>
            <td><?= $row["nama_mahasiswa"]?></td>
            <td><?= $row["nim"]?></td>
            <td><?= $row["nama_mk"]?></td>
            <td><?= $row["sks"]?></td>
            <td><?= $row["semester"]?></td>
            <td><?= $row["dosenpengampu"]?></td>
            <td><?= $row["tugas"]?></td>
            <td><?= $row["uts"]?></td>
            <td><?= $row["uas"]?></td>
            <td><?= $row["jurusan"]?></td>
        </tr>
        <?php $a++;?>
        <?php endforeach; ?>
    </table>
    </body>
</html >