<?php 


require 'functs.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
 
<link rel="icon" type="image/png" size="16*16" href="https://www.upr.ac.id/assets/images/logo/0.png">
  <title>Daftar Nilai Mata Kuliah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="icon" type="image/png" size="16*16" href="https://www.upr.ac.id/assets/images/logo/0.png">
  <link rel="stylesheet" type="text/css" href="profile.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">UTS Pemprograman Web dan Mobile I</a> 

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="tampilan2.php">Daftar Nilai Mata Kuliah<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="Matakuliah.php">Daftar Mata Kuliah<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Logout.php" >Logout</a>
      </li>
    </ul>
  </div>
</nav>
<br><br>
  
<div class="container">
   
<div class="row">
      <div class="offset-lg-4 col-lg-4 col-sm-6 col-12 main-section text-center">
          <div class="row">
              <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
          </div>
          <div class="row user-detail">
              <div class="col-lg-12 col-sm-12 col-12">
              <img src="img/logoupr.png" class="img-fluid" alt="Universitas Palangka Raya">
              <p class="text" style="font-size: 2rem; font-weight: 800;"> Universitas Palangka Raya </p>
              <br>
              <h5>Yohana Br Marpaung</h5>
              <p><i class="fa fa-map-marker" aria-hidden="true"></i> (203010503018) <br> yohanavanesa7@gmail.com
              <br> Teknik Informatika <br> Fakultas Teknik  <br> UNIVERSITAS PALANGKA RAYA</p> 
              </div>
          </div>
      </div>
    </div>
  </div>
  <script src="js/script.js">

</script>

</body>
</html>