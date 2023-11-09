<?php
require 'function.php';

$kpop = query("SELECT * FROM kpopmerch");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LITTLE THINGS K-POP STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .navbar {
            background-color:#76C352;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .logo {
            margin-right: 10px;
        }
        .text-grey {
            color: black; 
        }
        .green-heading {
            color: black; 
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
        .text-beige {
            color:darkred;
        }
        .btn-outline-success {
            color: #28a745; 
            border-color: #28a745;
        }
        .btn-outline-success:hover {
            color: #fff; 
            background-color: #28a745; 
        }
    </style>
</head>
<body>
<nav class="navbar border-body" data-bs-theme="dark">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="https://i.pinimg.com/736x/26/4c/83/264c8345db51a45c9ba3520608a29a3d.jpg" alt="Logo" class="logo" width="70" height="60">
                <h1 class="text-beige m-0">LITTLE THINGS K-POP STORE</h1>
            </a>
        </div>
    </nav>

    <div class="container text-center pt-3">
        <h2 style="background-color: greenyellow" class="green-heading">DAFTAR BARANG LITTLE THINGS</h2>
    </div>
    <div class="container pt-4">
        <table class="table table-success table-hover">
            <tr class="">
                <th>NO</th>
                <th>ID BARANG</th>
                <th>NAMA BARANG</th>
                <th>JENIS</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th></th>
            </tr>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($kpop as $row) : ?>
            </tr>
            <tr>
                <td class=""><?= $i; ?></td>
                <td><?= $row ["id_barang"];?></td>
                <td><?= $row ["nama_barang"];?></td>
                <td><?= $row ["jenis"];?></td>
                <td><?= $row ["harga"];?></td>
                <td><?= $row ["stok_barang"];?></td>
                <td><a class="btn btn-success" href="../Latihan7_Yoan_1202210321/ubah.php?id_barang=<?=$row ["id_barang"];?> " role="button">UBAH</a> <a class="btn btn-success" href="../Latihan4_Yoan_1202210321/deleting.php?id_barang=<?= $row ["id_barang"];?> " role="button" onclick="return confirm('APAKAH ANDA YAKIN?')">HAPUS</a></td>

            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>

    <div class="container text-center">
        <a class="btn btn-outline-success" href="../Latihan3_Yoan_1202210321/adding2.php" role="button">TAMBAH DATA</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
