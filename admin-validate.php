<?php
session_start();

if(isset($_POST["username"]) and isset ($_POST["password"])){

    if($_POST["username"]=="SanaJayaAdmin" and $_POST["password"]=="JayaSana2022"){

        $_SESSION["stat_login"]=1;
        $_SESSION["username"]="SanaJayaAdmin";
        $_SESSION["password"]="JayaSana2022";

        header("location:dashboard.php");
    }
    else{
        header("location:dashboard.php?halaman=input");
    }
}
else{
    echo "Data Tidak Lengkap";
}
?>