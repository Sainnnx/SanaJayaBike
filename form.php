<?php 
if(isset($_POST['submit'])){
    $to = "muh.husain2005@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $nm_cus = $_POST['nm_cus'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $nm_cus . " " . " Just purchase:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <title>Purchase | Sana Jaya</title>
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
        font-family: 'Monument Extended', sans-serif;
    }
    </style>
</head>

<body>
<nav class="navbar">
    <a href="index.php" class="non-selected"><ion-icon name="home-outline"></ion-icon>Home</a>
    <a href="product.php" class="non-selected product"><ion-icon name="library-outline"></ion-icon>Product</a>
    <a href="about.php" class="selected about-s"><ion-icon name="cube-outline"></ion-icon>About</a>
</nav>
<div class="form-grid">
<form action="save.php" method="post" name="DataBeli">
    
    <div><label for="nm_cus">Nama Customer</label></div>
    <div><input type="text" name="nm_cus" id="nm_cus"></div>

    <div><label for="nm_produk">Nama Produk</label></div>
    <div><input type="text" name="nm_produk" id="nm_produk"></div>

    <div><label for="alamat">Alamat</label></div>
    <div><input type="text" name="alamat" id="alamat"></div>

    <div><label for="no_telp">No Telepon (WA)</label></div>
    <div><input type="text" name="no_telp" id="no_telp"></div>
    
    <div><label for="email">Email</label></div>
    <div><input type="email" name="email" id="email"></div>

    <div><label for="tgl">Tanggal Pembelian</label></div>
    <div><input type="date" name="tgl" id="tgl"></div>
    
    <div class="buttons">
        <button type="submit" class="submit" name="submit">Purchase</button>
        <button type="reset" class="cancel">Cancel</button>
    </div>
</form>
<div>
    <span class="guide-txt">Dont know how to.</span>
    <br>
    <span class="guide-txt">Purchase in Sana Jaya?</span>
    <br>
    <a href="about.php#how-to"><button class="btn-txt">Click me.</button></a>
</div>
</body>
</html>