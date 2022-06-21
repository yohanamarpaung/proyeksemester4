<?php
session_start();

if( !isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

require 'functs.php';

$idnilai=$_GET["id"];

$nilai= query("SELECT * FROM daftarnilai WHERE id_nilai=$idnilai")[0];

if (isset($_POST["submit"] ) ) 
{

    if ( updatenilai ($_POST) >0)
        {
        echo "
              <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'Indexnilai.php';
              </script>
          ";
        } 
    else 
        {
          echo "
          <script>
                alert('Ubah Data Gagal!');
                document.location.href = 'indexnilai.php';
              </script>
          ";
        }


}    


?>



<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" type="image/png" size="16*16" href="https://www.upr.ac.id/assets/images/logo/0.png">
        <title> Ubah Nilai </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    </head>
        <body>
            <h1 align="center" style="color:#4d0000">Ubah Nilai</h1>

            <div class="container">
            <form action="" method="post">
                <input type="hidden" name="id_nilai" value="<?=$nilai["id_nilai"];?>">
                <ul>
      
               <div class="form-group">
                    <label for ="tugas"> Nilai Tugas: </label>
                    <input type="text" class="form-control" name="tugas" id="tugas"
                    value="<?=$nilai["tugas"];?>">
               </div>

               <div class="form-group">
                    <label for ="uts"> Nilai UTS: </label>
                    <input type="text" class="form-control" name="uts" id="uts"
                    value="<?=$nilai["uts"];?>">
               </div>
                
               <div class="form-group">
                    <label for ="uas"> Nilai UAS: </label>
                    <input type="text" class="form-control" name="uas" id="uas"
                    value="<?=$nilai["uas"];?>">
               </div>
                
               <div class="form-group">
                    <button type="submit" class="btn btn-success" name="submit"> Simpan Perubahan </button>
               </div>
               <div class="form-group">
                <a href="indexnilai.php"><button type="button" class="btn btn-primary">Kembali</button></a>
                </div>


                </ul>



            </form>




        </body>
</html>