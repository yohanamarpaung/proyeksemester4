<?php
session_start();

if( !isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

require 'functs.php';

$idmk=$_GET["id"];

$mk= query("SELECT * FROM matakuliah WHERE id_mk=$idmk")[0];

if (isset($_POST["submit"] ) ) 
{

    if ( updatemk ($_POST) >0)
        {
        echo "
              <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'Indexmk.php';
              </script>
          ";
        } 
    else 
        {
          echo "
          <script>
                alert('Ubah Data Gagal!');
                document.location.href = 'indexmk.php';
              </script>
          ";
        }


}    


?>



<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" type="image/png" size="16*16" href="https://www.upr.ac.id/assets/images/logo/0.png">
        <title> Ubah Matkul </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    </head>
        <body>
            <h1 align="center" style="color:#4d0000">Ubah Matkul</h1>

            <div class="container">
            <form action="" method="post">
                <input type="hidden" name="id_mk" value="<?=$mk["id_mk"];?>">
                <ul>
        
               <div class="form-group">
                    <label for ="nama_mk"> Nama Mata Kuliah : </label>
                    <input type="text" class="form-control" name="nama_mk" id="nama_mk"
                    value="<?=$mk["nama_mk"];?>">
               </div>

               <div class="form-group">
                    <label for ="sks"> SKS: </label>
                    <input type="text" class="form-control" name="sks" id="sks"
                    value="<?=$mk["sks"];?>">
               </div>
                
               <div class="form-group">
                    <label for ="semester"> Semester: </label>
                    <input type="text" class="form-control" name="semester" id="semester"
                    value="<?=$mk["semester"];?>">
               </div>

               <div class="form-group">
                    <label for ="dosenpengampu"> Dosen Pengampu: </label>
                    <input type="text" class="form-control" name="dosenpengampu" id="dosenpengampu"
                    value="<?=$mk["dosenpengampu"];?>">
               </div>
                
               <div class="form-group">
                    <button type="submit" class="btn btn-success" name="submit"> Simpan Perubahan </button>
               </div>
               <div class="form-group">
                <a href="indexmk.php"><button type="button" class="btn btn-primary">Kembali</button></a>
                </div>


                </ul>



            </form>




        </body>
</html>