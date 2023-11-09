<?php 
require 'function.php';

 if (isset( $_POST ["submit"])) {
    $kode = $_POST ["id_barang"];
    $nama = $_POST ["nama_barang"];
    $jenis = $_POST ["jenis"];
    $harga = $_POST ["harga"];
    $stok = $_POST ["stok_barang"];

    $query = "INSERT INTO kpopmerch VALUES ('$kode','$nama','$jenis','$harga','$stok')";

    mysqli_query($conn,$query);
    
 }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LITTLE THINGS K-POP STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Latihan1_Yoan_1202210321/index.php">
        
        LITTLE THINGS K-POP STORE
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="id_barang" class="form-label">ID BARANG :</label>
                <input type="text" class="form-control" id="id_barang" name ="id_barang" required>
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">NAMA BARANG :</label>
                <input type="text" class="form-control" id="nama_barang" name ="nama_barang" required>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">JENIS :</label>
                <input type="text" class="form-control" id="jenis" name ="jenis" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">HARGA :</label>
                <input type="text" class="form-control" id="harga" name ="harga" required>
            </div>
            <div class="mb-3">
                <label for="stok_barang" class="form-label">STOK BARANG :</label>
                <input type="text" class="form-control" id="stok_barang" name ="stok_barang" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
