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
          <li class="dropdown"><a href="#" class="active"><span>Setari</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
      echo '<li><a href="http://localhost/Proiect/User/cos.php" class="inactive">Cosul Meu(' . $rowCount . ')</a></li>';
?>
        </ul>
      </nav><!-- .navbar -->

      
      <a class="btn-book-a-table" href="http://localhost/Proiect/User/index.php?logout=1" onclick="return confirm('Esti sigur ca vrei sa te deconectezi?')">Deconecteaza-te</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="profile" class="profile d-flex align-items-center section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <p>Profilul<span>Tau</span></p>
        </div>
    <?php
include("include/connection.php");

function getDetaliiUtilizator($email) {
    include("include/connection.php");
    // Escapă caracterele speciale pentru a preveni SQL injection
    $email = mysqli_real_escape_string($connection, $email);

    // Construiește interogarea SQL pentru a obține detalii despre utilizator
    $query = "SELECT * FROM clienti WHERE email = '$email'";

    // Execută interogarea către baza de date
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Extrage rândul rezultat din interogare ca un array asociativ
        $row = mysqli_fetch_assoc($result);

        // Închide conexiunea la baza de date
        mysqli_close($connection);

        // Returnează array-ul cu detalii despre utilizator
        return $row;
    }

    // Închide conexiunea la baza de date
    mysqli_close($connection);

    // Returnează null dacă nu s-au găsit detalii despre utilizator
    return null;
}

function updateDetaliiUtilizator($email, $telefon, $adresa, $parola) {
    include("include/connection.php");
    // Escapă caracterele speciale pentru a preveni SQL injection
    $email = mysqli_real_escape_string($connection, $email);
    $telefon = mysqli_real_escape_string($connection, $telefon);
    $adresa = mysqli_real_escape_string($connection, $adresa);
    $parola = mysqli_real_escape_string($connection, $parola);

    // Construiește interogarea SQL pentru a actualiza detaliile utilizatorului
    $query = "UPDATE clienti SET telefon = '$telefon', adresa = '$adresa', parola = '$parola' WHERE email = '$email'";

    // Execută interogarea către baza de date
    $result = mysqli_query($connection, $query);

    // Închide conexiunea la baza de date
    mysqli_close($connection);

    // Returnează true dacă actualizarea a fost realizată cu succes, altfel false
    return $result ? true : false;
}
// Verifică dacă există un mesaj de succes sau de eroare și îl afișează
if (isset($_GET['message'])) {
  $message = $_GET['message'];
  echo '<div style="color: green;">' . $message . '</div>';
}

if (isset($_GET['error'])) {
  $error = $_GET['error'];
  echo '<div style="color: red;">' . $error . '</div>';
}

function afiseazaDetaliiUtilizator($email) {
    // Citeste adresele de email din fișierul "email.txt"
    $filename = "email.txt";
    $emails = file($filename, FILE_IGNORE_NEW_LINES);

    // Verifică dacă adresa de email este în fișier
    if (in_array($email, $emails)) {
        // Obține detaliile utilizatorului din baza de date
        $detaliiUtilizator = getDetaliiUtilizator($email);

        if ($detaliiUtilizator) {
          // Utilizatorul a fost găsit în baza de date
          // Afișează datele utilizatorului
          echo '<div class="user-data"><h2>Data Inregistrari:</h2> <h2> <span>' . $detaliiUtilizator['data'] . '</span></h2> </div>';
          echo '<div class="user-data"><h2>Nume:</h2><h2> <span>' . $detaliiUtilizator['nume'] . '</span></h2> </div>';
          echo '<div class="user-data"><h2>Email:</h2> <h2><span>' . $detaliiUtilizator['email'] . '</span> </h2></div>';
          echo '<div class="user-data"><h2>Parola:</h2> <h2><span>' . $detaliiUtilizator['parola'] .'</span> </h2></div>';
          echo '<button class="btn-book-a-table" onclick="editParola(\'' . $email . '\', this)">Edit Parola</button><br>' ;
          echo '<div class="user-data"><h2>Adresa:</h2> <h2><span>' . $detaliiUtilizator['adresa'] . '</span> </h2></div>';
          echo '<button class="btn-book-a-table" onclick="editAdresa(\'' . $email . '\', this)">Edit Adresa</button><br>';
          echo '<div class="user-data"><h2>Telefon:</h2> <h2><span>' . $detaliiUtilizator['telefon'] . '</span> </h2></div>';
          echo '<button class="btn-book-a-table" onclick="editTelefon(\'' . $email . '\', this)">Edit Telefon</button><br>';
          // ...
      } else {
            // Utilizatorul nu a fost găsit în baza de date
            // Tratează eroarea sau afișează un mesaj de eroare
            echo "Utilizatorul nu a fost găsit.";
        }
    } else {
        // Adresa de email nu este în fișier
        echo "Adresa de email nu există.";
    }
}
?>

<script>
    function editTelefon(email, button) {
        var telefon = prompt("Introduceti noul numar de telefon:");
        if (telefon !== null) {
            var url = "edit.php?email=" + email + "&telefon=" + encodeURIComponent(telefon);
            button.disabled = true;
            window.location.href = url;
        }
    }

    function editAdresa(email, button) {
        var adresa = prompt("Introduceti noua adresa:");
        if (adresa !== null) {
            var url = "edit.php?email=" + email + "&adresa=" + encodeURIComponent(adresa);
            button.disabled = true;
            window.location.href = url;
        }
    }

    function editParola(email, button) {
        var parola = prompt("Introduceti noua parola:");
        if (parola !== null) {
            var url = "edit.php?email=" + email + "&parola=" + encodeURIComponent(parola);
            button.disabled = true;
            window.location.href = url;
        }
    }
</script>
<div class="container">
        <?php
        // Citeste adresa de email din fișierul "email.txt"
        $filename = "email.txt";
        $emails = file($filename, FILE_IGNORE_NEW_LINES);

        // Verifică dacă există cel puțin o adresă de email în fișier
        if (!empty($emails)) {
            // Utilizează prima adresă de email din fișier pentru a afișa detalii despre utilizator
            $email = $emails[0];
            afiseazaDetaliiUtilizator($email);
        } else {
            // Nu există adrese de email în fișier
            echo "Nu există adrese de email în fișier.";
        }
        ?>
    </div>
    </div>
</section>


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