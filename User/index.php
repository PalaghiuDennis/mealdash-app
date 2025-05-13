<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MealDash</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/logo.png" rel="logo">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>
<?php
function clearEmailFile() {
    // Numele fișierului în care se stochează adresele de email
    $filename = "email.txt";

    // Deschide fișierul în modul "trunchiază" (curăță conținutul existent)
    $file = fopen($filename, "w");

    if ($file) {
        // Închide fișierul
        fclose($file);

        // Returnează true pentru a indica succesul ștergerii conținutului fișierului
        return true;
    } else {
        // Returnează false în caz de eroare la deschiderea fișierului
        return false;
    }
}
if (isset($_GET['logout'])) {
    if ($_GET['logout'] == 1) {
        // Apelul funcției pentru ștergerea conținutului fișierului "email.txt"
        clearEmailFile();
    }
}
function clearComandaFile() {
  // Numele fișierului în care se stochează adresele de email
  $filename = "comanda.txt";

  // Deschide fișierul în modul "trunchiază" (curăță conținutul existent)
  $file = fopen($filename, "w");

  if ($file) {
      // Închide fișierul
      fclose($file);

      // Returnează true pentru a indica succesul ștergerii conținutului fișierului
      return true;
  } else {
      // Returnează false în caz de eroare la deschiderea fișierului
      return false;
  }
}
if (isset($_GET['logout'])) {
  if ($_GET['logout'] == 1) {
      // Apelul funcției pentru ștergerea conținutului fișierului "email.txt"
      clearComandaFile();
  }
}
?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="http://localhost/Proiect/User/index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="" style="width: 50px; height: auto;">

        <h1>Meal Dash</h1><span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Acasa</a></li>
          <li><a href="#about">Despre Noi</a></li>
          <li><a href="#menu">Meniu</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="http://localhost/Proiect/User/login.php">Conecteaza-te/Inregistreaza-te</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Bucurați-vă de<br>mâncarea delicioasă</h2>
          <p data-aos="fade-up" data-aos-delay="100">Descoperă bucate delicioase, livrate rapid la tine acasă!</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="http://localhost/Proiect/User/login.php" class="btn-book-a-table">Conecteaza-te/Inregistreaza-te</a>
            <a href="https://www.youtube.com/watch?v=_QlLBLz7o-o&ab_channel=DanielConstantin" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">






    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Afla mai multe <span>Despre noi</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Pentru orice problema suna-ti la</h4>
              <p>+40 7570 11518</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              Restaurantul nostru este un loc minunat unde puteți savura cele mai delicioase preparate, iar acum vă oferim și serviciul de livrare la domiciliu. Indiferent dacă sunteți în căutarea unui prânz rapid sau a unei cine speciale, suntem aici să vă satisfacem pofta cu bucate pregătite cu grijă și pasiune.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Meniul nostru diversificat oferă preparate gustoase: supe, paste, pizza și burgeri.</li>
                <li><i class="bi bi-check2-all"></i> Folosim ingrediente proaspete și de calitate superioară.</li>
                <li><i class="bi bi-check2-all"></i> Livrăm la domiciliu pentru a vă bucura de mâncare proaspătă în confortul casei dumneavoastră.</li>
              </ul>
              <p>
              Alegeți restaurantul nostru pentru livrare și vă garantăm că veți descoperi bucuria de a mânca preparate gustoase și autentice, fără a fi nevoie să părăsiți confortul casei dumneavoastră. Suntem aici să vă aducem mâncarea preferată la ușa dumneavoastră, oferindu-vă o experiență culinară deosebită și comoditate absolută.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=_QlLBLz7o-o&ab_channel=DanielConstantin" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->






    
    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
  <div class="stats-item text-center w-100 h-100">
    <?php
    include("include/connection.php");
    $sql = "SELECT COUNT(*) as numar_mancare FROM mancare";
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $numar_mancare = $row["numar_mancare"];
    } else {
      $numar_mancare = 0;
    }
    ?>
    <span data-purecounter-start="0" data-purecounter-end="<?php echo $numar_mancare; ?>" data-purecounter-duration="1" class="purecounter"></span>
    <p>Preparate</p>
  </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
  <div class="stats-item text-center w-100 h-100">
    <?php
    include("include/connection.php");
    $sql = "SELECT COUNT(*) as numar_comenzi FROM comenzi";
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $numar_comenzi = $row["numar_comenzi"];
    } else {
      $numar_comenzi = 0;
    }
    ?>
    <span data-purecounter-start="0" data-purecounter-end="<?php echo $numar_comenzi; ?>" data-purecounter-duration="1" class="purecounter"></span>
    <p>Comenzi</p>
  </div>
</div><!-- End Stats Item -->


      <div class="col-lg-3 col-md-6">
  <div class="stats-item text-center w-100 h-100">
    <?php
    include("include/connection.php");
    $sql = "SELECT COUNT(*) as numar_angajati FROM angajati";
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $numar_angajati = $row["numar_angajati"];
    } else {
      $numar_angajati = 0;
    }
    ?>
    <span data-purecounter-start="0" data-purecounter-end="<?php echo $numar_angajati; ?>" data-purecounter-duration="1" class="purecounter"></span>
    <p>Angajati</p>
  </div>
</div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
  <div class="stats-item text-center w-100 h-100">
    <?php
    include("include/connection.php");
    $sql = "SELECT COUNT(*) as numar_clienti FROM clienti";
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $numar_clienti = $row["numar_clienti"];
    } else {
      $numar_clienti = 0;
    }
    ?>
    <span data-purecounter-start="0" data-purecounter-end="<?php echo $numar_clienti; ?>" data-purecounter-duration="1" class="purecounter"></span>
    <p>Clienti</p>
  </div>
</div>
      </div>
    </section><!-- End Stats Counter Section -->






    
    <!-- ======= Menu Section ======= -->

    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Meniu</h2>
          <p>Verificati <span>Meniul Nostru!</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-supe">
              <h4>Supe și Ciorbe</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-paste">
              <h4>Paste</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-pizza">
              <h4>Pizza</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-burger">
              <h4>Burger</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>
        <!-- End tab nav item -->
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-supe">

            <div class="tab-header text-center">
              <p>Meniu</p>
              <h3>Supe și Ciorbe</h3>
            </div>
            <?php 
            include("include/connection.php");
            $sql = "SELECT * FROM mancare where categorie='Supe și Ciorbe'";
            $result = $connection->query($sql);

            if (!$result) {
           die("Invalid query: " . $connection->error);
          }
          ?>
         <div class="container">
         <ul class="product-list">
         <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <img src="img/<?php echo $row["imagine"]; ?>" alt="Product Image">
                <div class="product-info">
                    <a><?php echo $row["nume"]; ?></a>
                    <p><?php echo $row["descriere"]; ?></p>
                    <a class="price"><?php echo $row["pret"]; ?> LEI</a>
                    <button class="buy-btn">Cumpără</button>
                </div>
            </li>
        <?php endwhile; ?>
        </ul>
       </div></div></div><!-- End Dinner Menu Content -->
       </div>

      </div>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-paste">

            <div class="tab-header text-center">
              <p>Meniu</p>
              <h3>Paste</h3>
            </div>
            <?php 
            include("include/connection.php");
            $sql = "SELECT * FROM mancare where categorie='Paste'";
            $result = $connection->query($sql);

            if (!$result) {
           die("Invalid query: " . $connection->error);
          }
          ?>
         <div class="container">
         <ul class="product-list">
         <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <img src="img/<?php echo $row["imagine"]; ?>" alt="Product Image">
                <div class="product-info">
                    <a><?php echo $row["nume"]; ?></a>
                    <p><?php echo $row["descriere"]; ?></p>
                    <a class="price"><?php echo $row["pret"]; ?> LEI</a>
                    <button class="buy-btn">Cumpără</button>
                </div>
            </li>
        <?php endwhile; ?>
        </ul>
       </div></div></div><!-- End Dinner Menu Content -->
       </div>

      </div>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-pizza">

            <div class="tab-header text-center">
              <p>Meniu</p>
              <h3>Pizza</h3>
            </div>
            <?php 
            include("include/connection.php");
            $sql = "SELECT * FROM mancare where categorie='Pizza'";
            $result = $connection->query($sql);

            if (!$result) {
           die("Invalid query: " . $connection->error);
          }
          ?>
         <div class="container">
         <ul class="product-list">
         <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <img src="img/<?php echo $row["imagine"]; ?>" alt="Product Image">
                <div class="product-info">
                    <a><?php echo $row["nume"]; ?></a>
                    <p><?php echo $row["descriere"]; ?></p>
                    <a class="price"><?php echo $row["pret"]; ?> LEI</a>
                    <button class="buy-btn">Cumpără</button>
                </div>
            </li>
        <?php endwhile; ?>
        </ul>
       </div></div></div><!-- End Dinner Menu Content -->
       </div>

      </div>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-burger">

            <div class="tab-header text-center">
              <p>Meniu</p>
              <h3>Burger</h3>
            </div>
            <?php 
            include("include/connection.php");
            $sql = "SELECT * FROM mancare where categorie='Burger'";
            $result = $connection->query($sql);

            if (!$result) {
           die("Invalid query: " . $connection->error);
          }
          ?>
         <div class="container">
         <ul class="product-list">
         <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <img src="img/<?php echo $row["imagine"]; ?>" alt="Product Image">
                <div class="product-info">
                    <a><?php echo $row["nume"]; ?></a>
                    <p><?php echo $row["descriere"]; ?></p>
                    <a class="price"><?php echo $row["pret"]; ?> LEI</a>
                    <button class="buy-btn">Cumpără</button>
                </div>
            </li>
        <?php endwhile; ?>
        </ul>
       </div></div></div><!-- End Dinner Menu Content -->
       </div>

      </div>
    </section><!-- End Menu Section -->







    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Ai nevoie de ajutor? <span>Contacteaza-ne</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=Str. Târgul din Vale nr. 1, Pitești 110040, România&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Adresa Noastra</h3>
                <p>Str. Târgul din Vale nr. 1, Pitești 110040</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Trimiteți-ne un email</h3>
                <p>palaghiudennis38@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Suna-ne</h3>
                <p>+40757 011 518</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Program</h3>
                <div><strong>Luni-Sambata:</strong>  10AM - 23PM;
                  <strong> Duminica:</strong> 10AM - 20PM
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Adresa</h4>
            <p>
              Str. Târgul din Vale nr. 1 <br>
              Pitești 110040 <br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Program</h4>
            <p>
              <strong>Luni-Sambata: 10AM - 23PM<br>
              Duminica: 10AM - 20PM<br></strong>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Palaghiu Dennis</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>