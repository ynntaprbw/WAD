<?php

require 'function.php';

$plt = $_GET ["id_barang"];


if ( hapus($plt) > 0) {
    echo "
    <script>
        alert('DATA BERHASIL DIHAPUS');
        document.location.href = '../Latihan1_Yoan_1202210321/index.php';
    </script>
    ";
} else {
    echo "
        <script>
            alert('DATA GAGAL DIHAPUS');
            document.location.href = '../Latihan1_Yoan_1202210321/index.php';
        </script>
        ";
    
}




?>