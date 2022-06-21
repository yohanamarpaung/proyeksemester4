<?php
session_start();

    if( isset($_SESSION["login"]) ){
    header("Location: index.php");
    exit;
    }


require 'functs.php';

if (isset($_POST["login"]) ){

$username=$_POST["username"];
$password=$_POST["password"];

$result = mysqli_query($conn, "SELECT *FROM staf WHERE username ='$username' ");

    if (mysqli_num_rows($result) ===1 ) {

    $row = mysqli_fetch_assoc($result); 
        if (password_verify($password, $row["password"])) {
        $_SESSION["login"]=true;
        header("Location: index.php");
        exit;
        }

    }
    $error=true;
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

<title>Login</title>
</head>

<body>
<?php
if(isset ($error)) : ?>
<?php endif; ?>


<div class="container">
    <form action=""  method="post">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Staf</p>
        <p class="text" style="font-size: 1rem; font-weight: 500;">Silahkan klik tombol mahasiswa, jika anda butuh login sebagai mahaiswa</p> 
        <br>
        <div class="form-group">
                <a href="mahasiswa.php"><button type="button" class="btn btn-primary" role="button">Mahasiswa</button></a> 
                </div>
                <br>


        <div class="input-group">
                <label for="username"> <p>Username</p> </label>
                <input type="text" name="username" id="username">        
        </div>
        <div class="input-group">
                <label for="password"> <p>Password</p></label>
                <input type="password" name="password" id="password"> <br></br>
        </div>
        <div class="input-group">
                 <a href="regis.php"><button type="button" class="btn btn-info">Regis akun</button></a>
                    <button type="submit" class="btn btn-info" role="button" name="login">Login</button>       
        </div>

    </form>

</div>
</body>

</html>