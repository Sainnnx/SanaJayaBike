<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets\style.css">
    <title>Dashboard | Sana Jaya</title>
    <style>
        body{
            height: 693px;
        }
        .sidenav{
            text-align: center;
            background-color: #171717;
            width: clamp(160px, 50%, 1000px);
            height: clamp(100%, 50%, 100%);
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
            font-size: 17px;
            font-family: 'Monument Extended', 'sans-serif';
        }
        .dashboard-grid{
            display: grid;
            grid-template-columns: 220px 1fr;
            grid-auto-rows: 693px;
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
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <li><a href="dashboard.php?halaman=logout">Logout</a></li>
        </nav>
        <div>
        <?php
        if (isset($_GET['halaman'])) {
        $halaman = $_GET['halaman'];
        switch ($halaman) {
            case 'input':
            include "form-admin.php";
            break;
            case 'login':
            include "login-admin.php";
            break;
            case 'data':
            include "tampilan.php";
            break;
            case 'logout';
            include "logout-admin.php";
            break;
            default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
        }
        } else {
            
        }
        ?>
        </div>
    </div>
</body>
</html>