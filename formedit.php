<?php
include "database.php";
$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * FROM barang WHERE id=$id");
$data = mysqli_fetch_assoc($query);
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
        font-family: 'Alegreya Sans SC', sans-serif;
    }
    .buttons a{
        margin: 5px 0px 0px 50px;
    }
    .sidenav{
            text-align: center;
            background-color: #171717;
            width: 20vh;
            height: 100vh;
            box-shadow: 0px 8px 15px 8px rgba(0,0,0,0.38);
            -webkit-box-shadow: 0px 0px 15px 8px rgba(0,0,0,0.38);
            -moz-box-shadow: 0px 0px 15px 8px rgba(0,0,0,0.38);
        }
        .sidenav li{
            margin: 0px 0px 50px 0px;
            list-style: none;
            position: relative;
            top: 5%;
        }
        .sidenav a{
            color: white;
            font-size: clamp(10px, 100%, 35px);
            font-family: 'Alegreya Sans SC', sans-serif;
        }
        .dashboard-grid{
            display: grid;
            grid-template-columns: 220px 1fr;
            grid-auto-rows: 75vh;
        }
        .logout{
            margin-top:60vh;
        }
    </style>
</head>

<body>
<div class="dashboard-grid">
    <nav class="sidenav">
        <a href="index.php"><img src="assets\img\Logo.png" alt="" width="50%"></a>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="dashboard.php?halaman=input">Tambah Data</a></li>
        <li><a href="dashboard.php?halaman=data">Tampilan Data</a></li>
        <div class="logout"><li><a href="dashboard.php?halaman=logout">Logout</a></li></div>
    </nav>
    
    <div class="form-admin">
        <form action="update.php" method="post" name="DataBarang">
            <div><label for="nama">Product Name</label></div>
            <div><input type="text" name="nama" id="nama" value="<?php echo $data['nama']?>"></div>
        
            <div><label for="harga">Product Price</label></div>
            <div><input type="text" name="harga" id="harga" value="<?php echo $data['harga']?>"></div>
        
            <div><label for="descript">Description</label></div>
            <div><textarea name="descript" id="descript" cols="30" rows="10" style="width: 344px;"><?php echo $data['descript']?></textarea></div>
            
            <div><label for="image">Product Image</label></div>
            <div><input type="file" name="image" id="image"></div>
        
            <div><label for="stok">Product Stock</label></div>
            <div><input type="number" name="stok" id="stok" value="<?php echo $data['stok']?>"></div>
            
            <div class="buttons">
                <button type="submit" class="submit" name="submit">Edit</button>
                <button type="reset" class="cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>