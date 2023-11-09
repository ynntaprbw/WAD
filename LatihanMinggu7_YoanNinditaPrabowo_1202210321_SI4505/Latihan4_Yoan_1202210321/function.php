<?php
$conn = mysqli_connect("localhost","root","","toko_littlethings");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $kode = $_POST ["id_barang"];
    $nama = $_POST ["nama_barang"];
    $jenis = $_POST ["jenis"];
    $harga = $_POST ["harga"];
    $stok = $_POST ["stok_barang"];

    $query = "INSERT INTO kpopmerch VALUES ('$kode','$nama','$jenis','$harga','$stok')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}
function hapus($idbar){
    global $conn;
    mysqli_query($conn,"DELETE FROM kpopmerch WHERE id_barang = $idbar") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>

?>