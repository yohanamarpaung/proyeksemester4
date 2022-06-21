<?php

session_start();

if( !isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

require 'functs.php';
if (isset($_POST["submit"])){

    if(insertmhs($_POST)>0){
        echo "
              <script>
                alert('Data Berhasil Ditambah!');
                document.location.href = 'indexmhs.php';
              </script>
          ";
        } else {
          echo "
          <script>
                alert('Tambah Data Gagal!');
                document.location.href = 'indexmhs.php';
              </script>
          ";
        }
}


?>



<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" type="image/png" size="16*16" href="https://www.upr.ac.id/assets/images/logo/0.png">
        <title> Tambah Data </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    </head>
        <body>
            <h1 align="center" style="color:#4d0000">Tambah Data</h1>

            <div class="container">
            <form action="" method="post">
                <ul>
        
                <div class="form-group">
                    <label for ="nama_mahasiswa"> NAMA : </label>
                    <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa">
                </div>

                <div class="form-group">
                    <label for ="nim"> NIM: </label>
                    <input type="text" class="form-control" name="nim" id="nim">
                </div>
                
                <div class="form-group">
                    <label for ="jurusan"> Jurusan: </label>
                    <input type="text" class="form-control" name="jurusan" id="jurusan">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="submit"> Simpan </button>
                </div>
                <div class="form-group">
                <a href="indexmhs.php"><button type="button" class="btn btn-primary">Kembali</button></a>
                </div>

                </ul>

            </form>

        </body>
</html>