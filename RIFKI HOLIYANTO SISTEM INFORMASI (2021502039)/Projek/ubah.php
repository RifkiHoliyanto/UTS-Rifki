<?php 
require 'functions.php';

// mengambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id

$alt = query("SELECT * FROM peminjam WHERE id_peminjam = $id")[0];




// cek apakah tombol data berhasil ditekan atau belum 
if(isset ($_POST["submit"])){


// cek apakah data berhasil diubah atau tidak

    if (ubah($_POST) > 0 ) {
        echo "<script>
        alert('berhasil di ubah!!');
        document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "<script>alert('gagal di ubah!!');
        document.location.href = 'index.php';</script>
        ";
        

    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Alat</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
    
    <div class="container">
               
        <h1>Ubah Data Alat</h1>
        
        
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="id_peminjam" class="form-label">id_peminjaman</label>
                <input type="text" class="form-control" id="id_peminjam" aria-describedby="id_peminjam" required value= "<?= $alt["id_peminjam"]; ?>">
            </div>
            <div class="mb-3">
                <label for="nama_peminjam" class="form-label">Nama_peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" aria-describedby="nama_peminjam" required value= "<?= $alt["nama_peminjam"]; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat_peminjam" class="form-label">alamat_peminjam</label>
                <input type="text" class="form-control" id="alamat_peminjam" aria-describedby="alamat_peminjam" required value= "<?= $alt["alamat_peminjam"]; ?>">
            </div>
            <div class="mb-3">
                <label for="kebutuhan" class="form-label">kebutuhan</label>
                <input type="text" class="form-control" id="kebutuhan" aria-describedby="kebutuhan" required value= "<?= $alt["kebutuhan"]; ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Tambah Alat!</button>

            </form>
            </div>
            <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>