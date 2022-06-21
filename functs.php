<?php


$conn = mysqli_connect("localhost", "root", "", "daftarnilai2");


function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows= [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]= $row;
    }
    return $rows;


}

function tampilan ($data) {
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows= []; 
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]= $row;
    }
    return $rows;

}

function tampilan2 ($data) {
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows= []; 
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]= $row;
    }
    return $rows;

}



function insertmhs($data)
 {
    global $conn;
    $nama=htmlspecialchars($data["nama_mahasiswa"]);
    $nim=htmlspecialchars($data["nim"]);
    $jurusan=htmlspecialchars($data["jurusan"]);

    $query= "INSERT INTO mahasiswa values ('','$nama','$nim','$jurusan')";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function deletemhs($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
    return mysqli_affected_rows($conn);

}

function updatemhs($data){

    global $conn;
    $id=$data["id"];
    $nama=htmlspecialchars($data["nama_mahasiswa"]);
    $nim=htmlspecialchars($data["nim"]);
    $jurusan=htmlspecialchars($data["jurusan"]);

    $query= "UPDATE mahasiswa SET  
            nama_mahasiswa='$nama',
            nim='$nim',
            jurusan='$jurusan'
            WHERE id=$id
            ";
            
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function insertmk($data)
 {
    global $conn;
    $nama_mk=htmlspecialchars($data["nama_mk"]);
    $sks=htmlspecialchars($data["sks"]);
    $semester=htmlspecialchars($data["semester"]);
    $dosenpengampu=htmlspecialchars($data["dosenpengampu"]);

    $query= "INSERT INTO matakuliah values ('','$nama_mk','$sks','$semester', '$dosenpengampu')";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function deletemk($idmk){
    global $conn;
    mysqli_query($conn,"DELETE FROM matakuliah WHERE id_mk=$idmk");
    return mysqli_affected_rows($conn);
}

function updatemk ($data){
    
    global $conn;
    $idmk=$data["id_mk"];
    $nama_mk=htmlspecialchars($data["nama_mk"]);
    $sks=htmlspecialchars($data["sks"]);
    $semester=htmlspecialchars($data["semester"]);
    $dosenpengampu=htmlspecialchars($data["dosenpengampu"]);

    $query= "UPDATE matakuliah SET  
            nama_mk='$nama_mk',
            sks='$sks',
            semester='$semester',
            dosenpengampu='$dosenpengampu'
            WHERE id_mk=$idmk
            ";
      
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function insertnilai($data)
 {
    global $conn;
    $id_mahasiswa=htmlspecialchars($data["id"]);
    $Id_Matkul=htmlspecialchars($data["id_mk"]);
    $Nilaitugas=htmlspecialchars($data["tugas"]);
    $Nilaiuts=htmlspecialchars($data["uts"]);
    $Nilaiuas=htmlspecialchars($data["uas"]);

    $query= "INSERT INTO daftarnilai values ('','$id_mahasiswa','$Id_Matkul','$Nilaitugas', '$Nilaiuts', '$Nilaiuas')";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function updatenilai ($data){
    
    global $conn;
    $idnilai=$data["id_nilai"];
    $Nilaitugas=htmlspecialchars($data["tugas"]);
    $Nilaiuts=htmlspecialchars($data["uts"]);
    $Nilaiuas=htmlspecialchars($data["uas"]);

    $query= "UPDATE daftarnilai SET  
            tugas='$Nilaitugas',
            uts='$Nilaiuts',
            uas='$Nilaiuas'
            WHERE id_nilai=$idnilai
            ";
      
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function deletenilai ($idnilai) {
    global $conn;
    mysqli_query($conn, "DELETE FROM daftarnilai WHERE id_nilai=$idnilai");
    return mysqli_affected_rows($conn);

}

function regis($data) {
global $conn;
$username= strtolower(stripslashes($data["username"]));
$password= mysqli_real_escape_string($conn, $data["password"]);
$password2= mysqli_real_escape_string($conn, $data["password2"]);


        $result=mysqli_query($conn, "SELECT username FROM staf WHERE username='$username'");
        if(mysqli_fetch_assoc($result) ){
            echo"<script> alert('username sudah ada') </script>";
            return false;
        }

                if ($password!==$password2){
                echo "<script>
                alert('konfirmasi salah')
                </script>";
                return false;
        }

    $password=password_hash($password, PASSWORD_DEFAULT);

    mysqli_query ($conn, "INSERT INTO staf VALUES ('', '$username', '$password') ");
    return mysqli_affected_rows($conn);
}

function regismhs($data) {
    global $conn;
    $username= strtolower(stripslashes($data["usernamem"]));
    $password= mysqli_real_escape_string($conn, $data["password"]);
    $password2= mysqli_real_escape_string($conn, $data["password2"]);
    
    
            $result=mysqli_query($conn, "SELECT usernamem FROM pengunjung WHERE usernamem='$username'");
            if(mysqli_fetch_assoc($result) ){
                echo"<script> alert('username sudah ada') </script>";
                return false;
            }
    
                    if ($password!==$password2){
                    echo "<script>
                    alert('konfirmasi salah')
                    </script>";
                    return false;
            }
    
        $password=password_hash($password, PASSWORD_DEFAULT);
    
        mysqli_query ($conn, "INSERT INTO pengunjung VALUES ('', '$username', '$password') ");
        return mysqli_affected_rows($conn);
    }
    
?>