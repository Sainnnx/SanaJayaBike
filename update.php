<?php
include "database.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$descript = $_POST['descript'];
$image = $_POST['image'];
$stok = $_POST['stok'];

$update = mysqli_query ($con, "UPDATE barang SET nama='$nama', harga='$harga', descript='$descript', stok='$stok' WHERE id='$id'");

if($update){
    header("location:dashboard.php?halaman=data");
}
else{
    echo 'Bruh';
}
?>