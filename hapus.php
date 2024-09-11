<?php
include "database.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

$hapus = mysqli_query($con, "DELETE FROM barang WHERE id=$id");

if($hapus){
    header ("location:dashboard.php?halaman=data");
}else{
    die("Gagal");
}
}