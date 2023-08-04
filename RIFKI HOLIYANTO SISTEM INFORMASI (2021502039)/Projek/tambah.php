 <?php 
require 'functions.php';

if(isset ($_POST["submit"])){



// cek apakah data berhasil ditamvahkan atau tidak

    if (tambah($_POST) > 0 ) {
        echo "<script>
        alert('berhasil di tambahkan!!');
        document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "<script>alert('gagal di tambahkan!!');
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
    <title>Tambah Alat Perlengkapan</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Tambah Alat Yang Anda Pinjam</h1>
        
        
        
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="id_peminjam" class="form-label">No Barang</label>
                <input type="text" class="form-control" id="no_inv" name="id_peminjam" required>
            </div>
            <div class="mb-3">
                <label for="nama_peminjam" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
            </div>
            <div class="mb-3">
                <label for="alamat_peminjam" class="form-label">alamat_peminjam</label>
                <input type="text" class="form-control" id="alamat_peminjam" name="alamat_peminjam">
            </div>
            <div class="mb-3">
                <label for="kebutuhan" class="form-label">kebutuhan</label>
                <input type="text" class="form-control" id="kebutuhan" name="kebutuhan">
            </div>
         
            <button type="submit" class="btn btn-primary" name="submit">Tambah Alat!</button>

            </form>
            </div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>