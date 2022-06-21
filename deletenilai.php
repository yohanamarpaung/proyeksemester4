<?php
session_start();

if( !isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

require 'functs.php';

    $idnilai =$_GET["id"];
    
    if( deletenilai ($idnilai)>0){
    echo "
    <script>
      alert('Matkul Berhasil Dihapus!');
      document.location.href = 'indexnilai.php';
    </script>
    ";
} else {
    echo "
    <script>
      alert('Hapus Matkul Gagal!');
      document.location.href = 'indexnilai.php';
    </script>
    ";
}


?>