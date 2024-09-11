<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>About Us | Sana Jaya</title>
</head>
<body>
  <a href="index.php"><img src="assets\img\Logo.png" alt="" class="logo"></a>
    <div class="aboutus">
      <img src="assets\img\aboutus.png" alt="aboutus">
    </div>
    <nav class="navbar" id="navbar">
      <a href="index.php" class="non-selected"><ion-icon name="home-outline"></ion-icon>Home</a>
      <a href="product.php" class="non-selected product"><ion-icon name="pricetags-outline"></ion-icon>Product</a>
      <a href="about.php" class="selected about-s"><ion-icon name="cube-outline"></ion-icon>About</a>
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
  <div class="about" id="about">
    <h1>ABOUT</h1>
    <div class="navigation-about">
      <a href="#about">About</a>
      <a href="#social">Social & Contact</a>
      <a href="#location">Location</a>
      <a href="#how-to">How to.</a>
    </div>
    <div class="about-grid">
      <p>Sana Jaya adalah toko sepeda yang berlokasi di citeureup yang dibuat pada April 2017. Sana Jaya awalnya diberi nama Okky Bike lalu pada April 2021 diganti menjadi Sana Jaya.</p>
      <p>Sana Jaya telah menjadi toko sepeda lokal yang terpercaya yang berbintang 5. Kami menyediakan layanan kami melalui WhatsApp, Tokopedia dan Instagram.</p>
    </div>
  </div>
  <div class="about" id="social">
    <h1>SOCIAL & CONTACT</h1>
    <div class="navigation-about">
      <a href="#about">About</a>
      <a href="#social">Social & Contact</a>
      <a href="#location">Location</a>
      <a href="#how-to">How to.</a>
    </div>
    <div class="social-grid">
      <a href="https://www.instagram.com/okibike_/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
      <a href="https://www.tokopedia.com/okkybike" target="_blank"><ion-icon name="storefront-outline"></ion-icon></a>
      <a href="https://api.whatsapp.com/send?phone=0813150112111" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon></a>
    </div>
  </div>
  <div class="about" id="location">
    <h1>LOCATION</h1>
    <div class="navigation-about">
      <a href="#about">About</a>
      <a href="#social">Social & Contact</a>
      <a href="#location">Location</a>
      <a href="#how-to">How to.</a>
    </div>
    <div class="loc-grid">
      <span>
        Alamat Toko
        <br>
        18 Jl. Raya Mayor Oking Jaya Atmaja
      </span>
      <iframe src="https://www.google.com/maps/embed?pb=!4v1667115682293!6m8!1m7!1sAPStOIy8SYd7gBmvbGS_fg!2m2!1d-6.482403601504659!2d106.8698755099191!3f254.0470630952531!4f-2.8933967935511617!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <span>
        Jam Buka Toko
        <br>
        Senin - Sabtu : 09:00 - 20:00
        <br>
        Minggu : 12:00 - 20:00
        <br>
        Hari Besar : Libur
      </span>
    </div>
  </div>
  <div class="about" id="how-to">
    <h1>How to purchase</h1>
    <div class="navigation-about">
      <a href="#about">About</a>
      <a href="#social">Social & Contact</a>
      <a href="#location">Location</a>
      <a href="#how-to">How to.</a>
    </div>
    <div class="how-desc">
      <p>Untuk pemula mungkin sulit cara melakukan pembelian di Sana Jaya, tetapi jangan khawatir kami disini menyediakan layanan untuk kalian bisa lebih mahir dengan sistem kita.</p>
    </div>
    <div class="how-grid">
      <img src="assets\img\step1.png" alt="step1">
      <p>1. Silahkan cari product yang kalian inginkan di halaman product yang telah disediakan, jika sudah silahkan click check untuk lanjut ke tahap kedua.</p>
      <div class="empty-spaces"></div>
      <div class="empty-spaces"></div>
      <p>2. Ditahap kedua kalian bisa lihat info product secara detail, kalian bisa ganti product lain atau lanjut dengan click tombol BUY.</p>
      <img src="assets\img\step2.png" alt="step2">
      <img src="assets\img\step3.png" alt="step3">
      <p>3. Silahkan isi form yang telah tatarkan oleh website, INGAT semua WAJIB diisi.</p>
      <div class="empty-spaces"></div>
      <div class="empty-spaces"></div>
      <p>4. Jika semua telah diisi dengan benar kalian klik SUBMIT lalu tunggu pesan konfirmasi dari salah satu admin kita, Terima Kasih!</p>
      <img src="assets\img\step4.png" alt="step4">
    </div>
  </div>
</body>
<footer>
  <span>Made from indonesia</span>
  <div></div>
  <span>SanaJayaBike&copy</span>
</footer>
</html>