<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>SanaJayaBike</title>
</head>
<body>
    <nav class="navbar" id="navbar">
        <a href="index.php" class="non-selected"><ion-icon name="home-outline"></ion-icon>Home</a>
        <a href="product.php" class="selected product"><ion-icon name="pricetags-outline"></ion-icon>Product</a>
        <a href="about.php" class="about-ns"><ion-icon name="cube-outline"></ion-icon>About</a>
    </nav>
    <script>
      window.onscroll = function() {myFunction()};
      
      var navbar = document.getElementById("navbar");
      var sticky = navbar.offsetTop;
      
      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
        } else {
          navbar.classList.remove("sticky");
        }
      }
      </script>
<div class="prdcnt">
    <div class="product-box">
      <?php
          include "database.php";
          $id=$_GET['id'];
          $result = $con->query("SELECT image FROM barang WHERE id=$id"); 
          $query = mysqli_query ($con, "SELECT * FROM barang WHERE id=$id");
          while ($data = mysqli_fetch_array ($query)){
        ?>
       <?php if($result->num_rows > 0){ ?> 
      <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"> 
        <?php } ?> 
      </div> 
        <?php }else{ ?> 
            <p class="status error">Image(s) not found...</p> 
        <?php } ?>
      <div>
          <h1><?php echo $data['nama']?></h1>
          <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star-half"></ion-icon>
          <h1><?php echo $data['harga']?></h1>
          <h4>Stock: <?php echo $data['stok']?></h4>
          Description:
          <p>
          <?php echo $data['descript']?>
          </p>
          <?php }?>
          <div class="buy-container">
            <a href="form.php"><button class="buy">BUY</button></a>
          </div>
      </div>
    </div>
</div>
</body>
</html>