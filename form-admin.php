<?php

session_start();
if(!isset($_SESSION["stat_login"]) and !isset($_SESSION["username"]) and !isset($_SESSION["password"])){
    
    echo 
    '<link rel="stylesheet" href="assets/style.css">
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
    <div class="admin-cnt">
    <p>Anda belum LOGIN, silahkan klik</p>
        <a class="admin" href="dashboard.php?halaman=login">&nbspDISINI&nbsp</a> untuk LOGIN
    </div>';
}
else{
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/style.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
        <title>Admin| Sana Jaya</title>
        <style>
        input{
        border: 1px solid #ccc;
        padding: 6px 12px;
        display: inline-block;
        width: 350px;
        overflow: hidden;
        position: relative;
        z-index: 1;
        box-sizing: border-box;
        border-radius: 4px;
        margin: 0px 0px 5px 0px;
        }
        form{
            transform: scale(1.4);
            font-family: Monument Extended, sans-serif;
        }
        .buttons a{
            margin: 5px 0px 0px 50px;
        }
        </style>
    </head>
    
    <body>
    <div class="form-admin">
    <form action="save-admin.php" method="post" name="DataBarang" enctype="multipart/form-data">
        <div><label for="nama">Product Name</label></div>
        <div><input type="text" name="nama" id="nama"></div>
    
        <div><label for="harga">Product Price</label></div>
        <div><input type="text" name="harga" id="harga"></div>
    
        <div><label for="descript">Description</label></div>
        <div><input type="text" name="descript" id="descript"></div>
    
        <div><label for="image">Product Image</label></div>
        <div><input type="file" name="image" id="image"></div>
    
        <div><label for="stok">Product Stock</label></div>
        <div><input type="number" name="stok" id="stok"></div>
        
        <div class="buttons">
            <button type="submit" class="submit" name="submit">Add</button>
            <button type="reset" class="cancel">Cancel</button>
        </div>
    </form>
    </div>
    </body>
    </html>';
}
?>
