<?php 
session_start();

if( !isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

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
  <a class="navbar-brand" href="#">Responsi Pemweb Daftar Nilai Mata Kuliah</a> 

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="tampilan.php">Daftar Nilai Mata Kuliah<span class="sr-only">(current)</span></a>
      </li>
      <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> Data </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="indexmhs.php">Daftar Mahasiswa</a>
        <a class="dropdown-item" href="indexmk.php">Daftar Matakuliah</a>
        <a class="dropdown-item" href="indexnilai.php">Daftar Nilai</a>
      </div>
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
              <figure class="figure">
              <img src="img/logoupr.png" class="figure-img img-fluid rounded" alt="">
                <figcaption class="figure-caption">Sistem Informasi Universitas Palangka Raya</figcaption>
            </figure>
              </div>
           
              <div class="row justify-content-center" > 
                <div class="col-6" >Deskripsi</div>
                <div class="col-9" >Web ini dibuat untuk memenuhi Ujian Tengah Semester Mata Kuliah Pemprograman Web dan Mobile Tahun ajaran 2022, yang berisikan informasi simple mengenai daftar nilai dengan menerapkan Create, Read, Update, dan Delete</div>
              </div>
          </div>
      </div>
    </div>
  </div>
  <script src="js/script.js">

</script>

</body>
</html>