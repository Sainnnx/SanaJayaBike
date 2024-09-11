<?php
include "database.php";
$nm_cus=$_POST['nm_cus'];
$nm_produk=$_POST['nm_produk'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$email=$_POST['email'];
$tgl=$_POST['tgl'];

$save = mysqli_query($con, "INSERT INTO pembelian (id,nm_cus,nm_produk,alamat,no_telp,email,tgl)VALUES('NULL','$nm_cus',
                    '$nm_produk','$alamat','$no_telp','$email','$tgl')");
if($save){
    header ("location:index.html");
}else{
    echo "Data gagal diinput";
}
?>