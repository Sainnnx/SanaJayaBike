<?php

session_start();

if(!isset($_SESSION["stat_login"]) and !isset($_SESSION["username"]) and !isset($_SESSION["password"])){
    
    die("
    <link rel='stylesheet' href='assets/style.css'>
    <style>
    .admin-cnt{
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-family: Monument Extended, sans-serif;
        font-size: 25px;
    }
    .admin-cnt a{
        color: #ffc445;
    }
    </style>
    <div class='admin-cnt'>
    <p>Anda belum LOGIN, silahkan klik</p>
        <a class='admin' href='dashboard.php?halaman=login'>&nbspDISINI&nbsp</a> untuk LOGIN
    </div>");
}
else{
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Admin | Data Barang</title>
</head>
<body>
    <br>
    <br>
    <br>
    <table class="tampilan" border="1" align="center" cellspacing="0">
    
        <tr align="center">
            <th>NO.</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ACTION</th>
        </tr>
        <?php
        include "database.php";
        $no = 1;
        $query = mysqli_query ($con, "SELECT * FROM barang");
        while ($data = mysqli_fetch_array ($query)){
        ?>
        <tr align="center">
            <td><?php echo $no++?></td>
            <td><?php echo $data['id']?></td>
            <td><?php echo $data['nama']?></td>
            <td><?php echo $data['harga']?></td>
            <td><?php echo $data['stok']?></td>
        <td>
            <a href="formedit.php?id='<?php echo $data["id"]?>'">EDIT</a> | 
            <a href="hapus.php?id='<?php echo $data["id"]?>'">DELETE</a>
        </td>
        
        <?php }?>
    </table>
</body>
</html>