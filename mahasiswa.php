<?php
session_start();

    if( isset($_SESSION["login"]) ){
    header("Location: indexpengunjung.php");
    exit;
    }


require 'functs.php';

if (isset($_POST["login"]) ){

$username=$_POST["usernamem"];
$password=$_POST["password"];

$result = mysqli_query($conn, "SELECT *FROM pengunjung WHERE usernamem ='$username' ");

    if (mysqli_num_rows($result) ===1 ) {

    $row = mysqli_fetch_assoc($result); 
        if (password_verify($password, $row["password"])) {
            header("Location: indexpengunjung.php");
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
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login </p>
        <div class="input-group">
                <label for="usernamem"> <p>Username</p> </label>
                <input type="text" name="usernamem" id="usernamem">        
        </div>
        <div class="input-group">
                <label for="password"> <p>Password</p></label>
                <input type="password" name="password" id="password"> <br></br>
        </div>
        <div class="input-group">
                 <a href="regismhs.php"><button type="button" class="btn btn-primary">Regis akun</button></a>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>       
        </div>

    </form>

</div>
</body>

</html>