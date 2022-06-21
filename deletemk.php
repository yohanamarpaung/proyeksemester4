<?php
session_start();

if( !isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

require 'functs.php';
    $idmk =$_GET["id"];
    if(deletemk($idmk)>0){
    
    echo "
    <script>
      alert('Data Berhasil Dihapus!');
      document.location.href = 'indexmk.php';
    </script>
    ";
} else {
    echo "
    <script>
      alert('Hapus Data Gagal!');
      document.location.href = 'indexmk.php';
    </script>
    ";
}


?>