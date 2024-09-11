<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
    <title>Product | Sana Jaya</title>
</head>
<body>
    <a href="index.php"><img src="assets\img\Logo.png" alt="" class="logo"></a>
    <div class="content">
      <div id="first"><img src="assets\img\all.png" class="photo-header" alt="utilitas"></div>
      <div id="second"><img src="assets\img\bike.png" class="photo-header" alt="bike"></div>
      <div id="third"><img src="assets\img\bike-creation-workshop.png" class="photo-header" alt="utilitas"></div>
    </div>
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
    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all'); document.getElementById('first').style.display = 'block'; document.getElementById('third').style.display = 'none'; document.getElementById('second').style.display = 'none';"> All Product</button>
        <button class="btn" onclick="filterSelection('sepeda'); document.getElementById('first').style.display = 'none'; document.getElementById('third').style.display = 'none'; document.getElementById('second').style.display = 'block';"> Bikes</button>
        <button class="btn" onclick="filterSelection('utilitas'); document.getElementById('first').style.display = 'none'; document.getElementById('third').style.display = 'block'; document.getElementById('second').style.display = 'none';""> Parts & Accessories</button>
    </div>
    
    <?php
    include "database.php";
    $query = 'SELECT * FROM barang WHERE id';
        $result = mysqli_query($con, $query);
            if ($result):
            while($data = mysqli_fetch_assoc($result)):
            endwhile;
            endif;
    ?>
    <div class="product-grid">
        <div class="section card sepeda">
          <img src="assets\img\e-six.png" alt="">
          <h1><abbr title="Patrol E-Six S-Spec (21) S Black">Patrol E-Six S...</abbr></h1>
          <h1>88.000.000</h1>
          <a href="product-view.php?id='1'"><button class="check">CHECK</button></a>
        </div>
        <div class="section card sepeda">
          <img src="assets\img\c092.png" alt="">
          <h1><abbr title="Patrol C092 2021">Patrol C092 2021</abbr></h1>
          <h1>18.000.000</h1>
          <a href="product-view.php?id='2'"><button class="check">CHECK</button></a>
        </div>
        <div class="section card utilitas">
          <img src="assets\img\bartape pro sport.jpg" alt="">
          <h1><abbr title="Bartape Pro Sport">Bartape Pro Sport</abbr></h1>
          <h1>200.000</h1>
          <a href="product-view.php?id='3'"><button class="check">CHECK</button></a>
        </div>
        <div class="section card utilitas">
          <img src="assets\img\bratape pro classic.jpg" alt="">
          <h1><abbr title="Bartape Pro Classic">Bartape Pro Classic</abbr></h1>
          <h1>150.000</h1>
          <a href="product-view.php?id='4'"><button class="check">CHECK</button></a>
        </div>
        <div class="section card sepeda">
          <img src="assets\img\dominate.png" alt="">
          <h1><abbr title="Dominate AXC 2-Comp 2022 M 11 Speed">Dominate AXC 2...</abbr></h1>
          <h1>7.500.000</h1>
          <a href="product-view.php?id='5'"><button class="check">CHECK</button></a>
        </div>
        <div class="section card sepeda">
          <img src="assets\img\skeletonlx1.0.png" alt="">
          <h1><abbr title="Pacific Skeleton LX 1.0">Pacific Skeleton L...</abbr></h1>
          <h1>19.800.000</h1>
          <a href="product-view.php?id='6'"><button class="check">CHECK</button></a>
        </div>
        <div class="section card utilitas">
          <img src="assets\img\ban luar 16x2.125.png" alt="">
          <h1><abbr title="Bartape Pro Sport">Ban luar 16x2.125</abbr></h1>
          <h1>50.000</h1>
          <a href="product-view.php?id='7'"><button class="check">CHECK</button></a>
        </div>
        <div class="section card utilitas">
          <img src="assets\img\ban dalam 26X united.jpg" alt="">
          <h1><abbr title="Ban dalam 26X United">Ban dalam 26X U...</abbr></h1>
          <h1>30.000</h1>
          <a href="product-view.php?id='8'"><button class="check">CHECK</button></a>
        </div>
        <div class="section card sepeda">
          <img src="assets\img\twittergravel.png" alt="">
          <h1><abbr title="Twitter Gravel 48">Twitter Gravel 48</abbr></h1>
          <h1>15.000.000</h1>
          <a href="product-view.php?id='9'"><button class="check">CHECK</button></a>
        </div>
        <div class="section card sepeda">
          <img src="assets\img\track3000-26.png" alt="">
          <h1><abbr title="Track 3000 26 Speed">Track 3000 26...</abbr></h1>
          <h1>1.700.000</h1>
          <a href="product-view.php?id='26'"><button class="check">CHECK</button></a>
        </div>
      </div>
      <script src="script.js"></script>
     
      
    </body>
    <footer>
    <span>Made from indonesia</span>
    <div></div>
    <span>SanaJayaBike&copy</span>
    </footer>
    </html>