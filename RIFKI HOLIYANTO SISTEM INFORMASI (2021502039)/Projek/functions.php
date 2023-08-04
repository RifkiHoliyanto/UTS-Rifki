<?php 
$conn = mysqli_connect('localhost', 'root','','peminamansound'); 

function query($query){
global  $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data){
    global $conn;
    $id_peminjam = htmlspecialchars($data["id_peminjam"]);
    $nama_peminjam = htmlspecialchars($data["nama_peminjam"]);
    $alamat_peminjam = htmlspecialchars($data["alamat_peminjam"]);
    $kebutuhan = htmlspecialchars($data["kebutuhan"]);
    
   




    $query = "INSERT INTO peminjam
                    VALUES 
                    (
                        '$id_peminjam','$nama_peminjam','$alamat_peminjam','$kebutuhan'
                       
                    )"; 

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



  
function upload()
{
    $namaFileBaru = uniqid();
}



$namaFileBaru = uniqid();
$namaFileBaru .= '.';





return $namaFileBaru;




function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM peminjam WHERE id_peminjam = '$id'");
    return mysqli_affected_rows($conn);
}




function ubah($data)
{
    global $conn;
    $id = $data["peminjam"];
    $id_peminjam = htmlspecialchars($data["id_peminjam"]);
    $nama_peminjam = htmlspecialchars($data["nama_peminjam"]);
    $alamat_peminjam = htmlspecialchars($data["alamat_peminjam"]);
    $kebutuhan = htmlspecialchars($data["kebutuhan"]);

    $query = "UPDATE peminjam SET
                id_peminjam = '$id_peminjam',
                nama_peminjam = '$nama_peminjam',
                alamat_peminjam = '$alamat_peminjam',
                kebutuhan = '$kebutuhan'
                WHERE id_peminjam = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
    

   
    
    
    $query = "UPDATE peminamansound SET
                id_peminjaman = ' $id_peminjam',
                nama_peminjam = ' $nama_peminjam',
                alamat_peminjam = '$alamat_peminjam',
                kebutuhan = '$kebutuhan',

                WHERE peminjaman = $id
                    "; 

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);





    function cari($keyword){
        $query = "SELECT * FROM peminamansound 
        WHERE
        id_peminjaman LIKE '%$keyword%' OR
        nama_peminjam LIKE '%$keyword%' OR
        alamat_peminjam LIKE '%$keyword%' OR
        kebutuhan LIKE '%$keyword%'
        ";

        return  query($query);
    }


    function registrasi($data){
        global $conn;
    
        $username = strtolower(stripslashes($conn, $data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        
        
         // cek konfirmasi password
    if ($password !== $password2){
    
        echo"<script>
        alert('konfirmasi password tidak sesuai');
        </script>;    
        ";
    
        return false;
    }
    return 1;
    //cek enskripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT );
    
    }
    











?>
