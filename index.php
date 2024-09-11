<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Homepage | Sana Jaya</title>
</head>
<body>
    <a href="index.php"><img src="assets\img\Logo.png" alt="" class="logo"></a>
    <div class="overflow">
        <div class="slide-wrapper">
            <a href="product-view.php?id='1'"><img src="assets\img\nature.png"></a>
            <a href="product-view.php?id='5'"><img src="assets\img\nature1.png"></a>
            <a href="product-view.php?id='6'"><img src="assets\img\nature2.png"></a>
            <a href="product-view.php?id='2'"><img src="assets\img\nature3.png"></a>
        </div>
    </div>
    <nav class="navbar" id="navbar">
        <a href="index.php" class="selected"><ion-icon name="home-outline"></ion-icon>Home</a>
        <a href="product.php" class="non-selected product"><ion-icon name="pricetags-outline"></ion-icon>Product</a>
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
    <h1 class="title">Trending Items</h1>
    <div class="home-grid">
        <a href="product-view.php?id='1'"><img class="box" src="assets\img\e-six.png" alt="e-six"></a>
        <a href="product-view.php?id='6'"><img class="box" src="assets\img\skeletonlx1.0.png" alt="skeletonlx1.0"></a>
        <a href="product-view.php?id='5'"><img class="box" src="assets\img\dominate.png" alt="dominate"></a>
    </div>
    <h1 class="title">Why Choose Us?</h1>
    <center><img src="assets\img\stars.png" alt="stars" class="stars"></center>
    <h1 class="title">Our 5 Stars don't lie</h1>

    <img src="assets\img\landing-qt.png" alt="" class="case">

    <div class="greeting-bar">
        <h1 class="title">Get your's right now!</h1>
        <a href="product.php"><button class="getstarted1">Get Started!</button></a>
    </div>
</body>
<footer>
    <span>Made from indonesia</span>
    <div></div>
    <span>SanaJayaBike&copy</span>
</footer>
</html>