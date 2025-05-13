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
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="http://localhost/Proiect/User/profil.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="" style="width: 50px; height: auto;">

        <h1>Meal Dash</h1><span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="http://localhost/Proiect/User/user.php#hero">Acasa</a></li>
          <li><a href="http://localhost/Proiect/User/user.php#about">Despre Noi</a></li>
          <li><a href="http://localhost/Proiect/User/user.php#menu">Meniu</a></li>
          <li><a href="http://localhost/Proiect/User/user.php#contact">Contact</a></li>
          <li class="dropdown"><a href="#" class="inactive"><span>Setari</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="http://localhost/Proiect/User/profil.php">Profilul Meu</a></li>
              <li><a href="http://localhost/Proiect/User/comenzi.php">Comenzile Mele</a></li>
            </ul>
          </li>
          <?php   
         function countRowsInFile($filePath) {
          $file = fopen($filePath, 'r');
          $rowCount = 0;
      
          // Parcurge fiecare rând din fișier
          while (!feof($file)) {
              $line = fgets($file);
              
              // Verifică dacă rândul nu este gol
              if (!empty(trim($line))) {
                  $rowCount++;
              }
          }
      
          fclose($file);
      
          return $rowCount;
      }
      
      // Apelarea funcției pentru a obține numărul de rânduri
      $filePath = 'comanda.txt';
      $rowCount = countRowsInFile($filePath);
      
      // Afișarea textului dorit cu numărul de rânduri
      echo '<li><a href="http://localhost/Proiect/User/cos.php" class="active">Cosul Meu(' . $rowCount . ')</a></li>';
?>
        </ul>
      </nav><!-- .navbar -->

      
      <a class="btn-book-a-table" href="http://localhost/Proiect/User/index.php?logout=1" onclick="return confirm('Esti sigur ca vrei sa te deconectezi?')">Deconecteaza-te</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <script>
function removeFromTextFile(itemId) {
    var xhr = new XMLHttpRequest();
    var url = 'remove_from_file.php';
    var params = 'itemId=' + encodeURIComponent(itemId);

    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Răspunsul de la server
            console.log(xhr.responseText);
        }
    };

    xhr.send(params);
}
function saveToTextFile(itemId) {
    var xhr = new XMLHttpRequest();
    var url = 'save_to_file.php';
    var params = 'itemId=' + '\n' + encodeURIComponent(itemId) + '\n'; // Adăugați un rând gol la sfârșitul parametrului

    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Răspunsul de la server
            console.log(xhr.responseText);
        }
    };

    xhr.send(params);
}



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