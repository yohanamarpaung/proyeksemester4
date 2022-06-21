<?php
session_start();

if( !isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

require 'functs.php';

    $id =$_GET["id"];
    if( deletemhs ($id)>0){
    echo "
    <script>
      alert('Data Berhasil Dihapus!');
      document.location.href = 'indexmhs.php';
    </script>
    ";
} else {
    echo "
    <script>
      alert('Hapus Data Gagal!');
      document.location.href = 'indexmhs.php';
    </script>
    ";
}


?>