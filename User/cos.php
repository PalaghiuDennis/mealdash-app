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
  </script>
  <!-- ======= Hero Section ======= -->
  <section id="cos" class="cos d-flex align-items-center section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <p>Cosul<span>Tau</span></p>
    <?php
    include("include/connection.php");
    // Citiți id-urile din fișierul "comanda.txt" și stocați-le într-un array
    $comandaFile = 'comanda.txt';
    $lines = file($comandaFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Inițializăm un array pentru a ține evidența cantităților
    $cantitati = array();

    // Parcurgem fiecare linie din fișier
    foreach ($lines as $line) {
        $id = trim($line);

        // Verificăm dacă id-ul există deja în array-ul de cantități
        if (isset($cantitati[$id])) {
            // Dacă există, incrementăm cantitatea
            $cantitati[$id]++;
        } else {
            // Altfel, inițializăm cantitatea la 1
            $cantitati[$id] = 1;
        }
    }

    if (empty($cantitati)) {
        // Cosul este gol
        echo "Cosul este gol.";
    } else {
        // Construiți interogarea SQL pentru a selecta doar mâncarea cu id-urile din fișier
        $sql = "SELECT * FROM mancare WHERE id IN (" . implode(',', array_keys($cantitati)) . ")";
        $result = $connection->query($sql);

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        // Calculăm subtotalul și prețul final
        $subtotal = 0;
        while ($row = $result->fetch_assoc()) {
            $cantitate = $cantitati[$row["id"]];
            $subtotal += $row["pret"] * $cantitate;
        }
        // Afisăm subtotalul, livrarea și prețul final
        echo "<h2>Subtotal:<span>" . $subtotal . " LEI</span></h2>";
        echo "<h2>Livrare:<span> 10 LEI</span></h2>";
        echo "<h2>Pretul Final:<span> " . ($subtotal + 10) . " LEI</span></h2>";
    }

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

    // Construiește interogarea SQL pentru a actualiza detaliile utilizatorului
    $query = "UPDATE clienti SET telefon = '$telefon', adresa = '$adresa' WHERE email = '$email'";

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
          echo '<p>Detalii Livrare</p>';
          echo '<h3> <span>' . $detaliiUtilizator['nume'] . '</span></h3>';
          echo '<h3><span>' . $detaliiUtilizator['adresa'] . '</span> </h3>';
          echo '<button class="btn-book-a-table" onclick="editAdresa(\'' . $email . '\', this)">Edit Adresa</button><br>';
          echo '<h3><span>' . $detaliiUtilizator['telefon'] . '</span> </h3>';
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
        $pret_total=$subtotal+10;

       function insereazaDetaliiComanda() {
        include("include/connection.php");
        $filename = "email.txt";
        $emails = file($filename, FILE_IGNORE_NEW_LINES);
        
        // Verifică dacă există cel puțin o adresă de email în fișier
        if (!empty($emails)) {
            // Utilizează prima adresă de email din fișier pentru a căuta detaliile utilizatorului
            $email = $emails[0];}
    
            // Obține detaliile utilizatorului din baza de date
            $detaliiUtilizator = getDetaliiUtilizator($email);
    
            if ($detaliiUtilizator) {
                // Extrage adresa și telefonul din detaliile utilizatorului
                $clientID = $detaliiUtilizator['clientID'];
                $nume = $detaliiUtilizator['nume'];
                $adresa = $detaliiUtilizator['adresa'];
                $telefon = $detaliiUtilizator['telefon'];
                global $pret_total;
                $mentiuni = $_POST['descriere'];
                $status="IN ASTEPTARE";
                // Obține data și ora curentă
                date_default_timezone_set('Europe/Bucharest');
                 $data_trimiteri = date('Y-m-d H:i:s');

                // Inserează adresa și telefonul în tabela "comenzi"
                $query = "INSERT INTO comenzi (pret_total, clientID, nume, adresa, telefon, data_trimiteri, mentiuni,statusc) VALUES ('$pret_total', '$clientID', '$nume', '$adresa', '$telefon', '$data_trimiteri', '$mentiuni', '$status')";
$result = mysqli_query($connection, $query);

if ($result) {
    // Obține comandaID generat în urma inserării
    $comandaID = mysqli_insert_id($connection);


  // Calea către fișierul comanda.txt
$comandaFile = 'comanda.txt';

// Citirea conținutului fișierului într-un array
$lines = file($comandaFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Inițializarea unui array pentru a ține evidența cantităților
$cantitati = array();

// Parcurgerea fiecărui rând din fișier
foreach ($lines as $line) {
    $id = trim($line);

    // Verificăm dacă id-ul este gol sau nu
    if (!empty($id)) {
        // Verificăm dacă id-ul există deja în array-ul de cantități
        if (isset($cantitati[$id])) {
            // Dacă există, incrementăm cantitatea
            $cantitati[$id]++;
        } else {
            // Altfel, inițializăm cantitatea la 1
            $cantitati[$id] = 1;
        }
    }
}

// Verificăm dacă există elemente în comanda
if (empty($cantitati)) {
    echo "Comanda este goală.";
} else {
    // Construim interogarea SQL pentru a selecta mâncarea cu id-urile din comanda
    $sql = "SELECT * FROM mancare WHERE id IN (" . implode(',', array_keys($cantitati)) . ")";
    $result = $connection->query($sql);

    if (!$result) {
        die("Interogare nevalidă: " . $connection->error);
    }

    // Parcurgem rezultatul interogării
    while ($row = $result->fetch_assoc()) {
        // Obținem informațiile din baza de date
        $mancareID = $row['id'];
        $nume = $row['nume'];
        $cantitate = $cantitati[$mancareID];
        $pret = $row['pret'];
        // Inserăm elementul în tabela "comanda_elemente"
  $query_element = "INSERT INTO comanda_elemente (comandaID, mancareID, nume, cantitate,pret) VALUES ('$comandaID', '$mancareID', '$nume', '$cantitate', '$pret')";
  $result_insert = mysqli_query($connection, $query_element);

        if ($result_insert) {
            // Inserarea a fost realizată cu succes
            echo "Elementul '$nume' a fost inserat în tabela comanda_elemente.";
            header("Location: http://localhost/Proiect/User/user.php");
            file_put_contents($comandaFile, "");
        } else {
            // A apărut o eroare la inserare
            echo "Eroare la inserarea elementului '$nume': " . mysqli_error($connection);
        }
    }
}
}


    
        // Închide conexiunea la baza de date
        mysqli_close($connection);

      


      } }
      
        if (isset($_POST['trimite_comanda'])) {
          // Apelează funcția insereazaDetaliiComanda() dacă butonul a fost apăsat
          insereazaDetaliiComanda();
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
    
</script>
<form method="POST" action="">
      <h2>Mentiuni Speciale:</h2>
			<textarea name="descriere" id="descriere" placeholder="Mentiuni Speciale"></textarea><br>
      <button class="btn-book-a-table" type="submit" name="trimite_comanda">Trimite Comanda</button>
</form>

       </div>
       </div>
    <div class="container">
        <ul class="product-list">
            <?php
            // Resetați rezultatul pentru a parcurge din nou
            $result->data_seek(0);

            while ($row = $result->fetch_assoc()): ?>
                <li>
                    <img src="img/<?php echo $row["imagine"]; ?>" alt="Product Image">
                    <div class="product-info">
                        <a id="name_<?php echo $row["id"]; ?>"><?php echo $row["nume"]; ?></a>
                        <p id="description_<?php echo $row["id"]; ?>"><?php echo $row["descriere"]; ?></p>
                        <p>Cantitate: <?php echo $cantitati[$row["id"]]; ?></p>
                        <a class="price" id="price_<?php echo $row["id"]; ?>"><?php echo $row["pret"]; ?> LEI</a>
                        <button class="buy-btn" onclick="removeFromTextFile(<?php echo $row["id"]; ?>); location.reload();">Stergere</button>
                        <button class="buy-btn" onclick="saveToTextFile(<?php echo $row["id"]; ?>); location.reload();">Adauga</button>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
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