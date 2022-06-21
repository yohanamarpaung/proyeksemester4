<?php

require 'functs.php';
if(isset($_POST["register"])){

    if(regismhs($_POST)>0){
        echo "<script>
        alert('username berhasil dibuat');
        </script>";
    }
    else {
        echo mysqli_error($conn);
    }
}


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="icon" type="image/png" size="16*16" href="https://www.upr.ac.id/assets/images/logo/0.png">

    <title>Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post"> 

        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Registrasi Mahasiswa</p>
                    <div class="form-group">
                    <a href="mahasiswa.php"><button type="button" class="btn btn-primary">login </button></a>
                    </div>

        <div class="input-group">
        <label for="usernamem"> Username: </label>
        <input type="text" name="usernamem" id="usernamem">
        </div>
            <br>
        <div class="input-group">
        <label for="password"> Password: </label>
        <input type="password" name="password" id="password">
        </div>
        <br>

        <div class="input-group">
        <label for="password"> Konfirmasi password: </label>
        <input type="password" name="password2" id="password2">
        </div>
        <br>

        <div class="input-group">
            <button type="submit" name="register"> Registrasi </button>
        </div>
        
    </div>




</form>

</body>
</html>