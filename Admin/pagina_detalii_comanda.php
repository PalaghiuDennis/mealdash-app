
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MealDash</title>
  <!--Material Icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <!--Stylesheet-->
  <link rel="stylesheet" href="assets/css/style.css">
  <!--Favicon-->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/logo.png" rel="logo">
</head>
<body>
  <div class="container">
    <aside>
      <!--Top-->
      <div class="top">
        <div class="logo">
          <img src="./images/logo.png">
          <h2>Meal<span class="h22">Dash</span></h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-icons-sharp">close</span>
        </div>
      </div>
      <!--Sidebar-->
      <div class="sidebar">
        <a href="http://localhost/Proiect/Admin/customers.php">
          <span class="material-icons-sharp">person_outline</span>
          <h3>Clienti</h3>
        </a>

        <a href="http://localhost/Proiect/Admin/comenzi.php" class="active">
          <span class="material-icons-sharp">receipt_long</span>
          <h3>Comenzi</h3>
        </a>
        
        <a href="http://localhost/Proiect/Admin/products.php">
          <span class="material-icons-sharp">inventory</span>
          <h3>Produse</h3>
        </a>
        
        <a href="http://localhost/Proiect/Admin/add_products.php">
          <span class="material-icons-sharp">add</span>
          <h3>Adauga Produs</h3>
        </a>

        <a href="http://localhost/Proiect/Admin/angajati.php">
          <span class="material-icons-sharp">badge</span>
          <h3>Angajati</h3>
        </a>
                
        <a href="http://localhost/Proiect/Admin/login.php">
          <span class="material-icons-sharp">logout</span>
          <h3>Sign Out</h3>
        </a>
      </div>
    </aside>
    <!--Main-->
    <main>
      <div class="container3">
      <?php
include "db_conn.php";
if (isset($_POST['comandaID'])) {
  $comandaID = $_POST['comandaID'];} 



// Interogare pentru a selecta datele angajatului cu angajatID specific
$sql = "SELECT * FROM comanda_elemente WHERE comandaID = '$comandaID'";
$result = $connection->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="comenzi">';
        echo '<tr><th>Nume</th><th>Cantitate</th><th>Pret</th></tr>';

        while ($row = $result->fetch_assoc()) {
            $nume = $row['nume'];
            $cantitate = $row['cantitate'];
            $pret = $row['pret'];

            echo '<tr>';
            echo '<td>' . $nume . '</td>';
            echo '<td>' . $cantitate . '</td>';
            echo '<td>' . $pret . '</td>';
            echo '</tr>';
        }

        echo '</table>';


    }

// Interogare pentru a selecta datele angajatului cu angajatID specific
$sql = "SELECT * FROM comenzi WHERE comandaID = '$comandaID'";
$result = $connection->query($sql);
    if ($result->num_rows > 0) {
      echo '<table class="comenzi">';
      echo '<tr><th>Nume Livrator</th><th>Telefon Livrator</th><th>Data Livrare</th></tr>';

      while ($row = $result->fetch_assoc()) {
          $numelivrator = $row['PersonaLivrareNume'];
          $telefon = $row['telefonLivrator'];
          $data_livrare = $row['data_livrare'];

          echo '<tr>';
          echo '<td>' . $numelivrator . '</td>';
          echo '<td>' . $telefon . '</td>';
          echo '<td>' . $data_livrare . '</td>';
          echo '</tr>';
      }

      echo '</table>';
  }


?>

</div>
<div class="container2">
<div class="detalii_angajat">
<h2>Introducere Date Livrare</h2>
<form action="procesare_modificare_livrare.php" method="POST">
  <input type="hidden" name="comandaID" value= "<?php echo $comandaID; ?>">

  <label for="livrator">Nume Livrator:</label>
  <select name="livrator" id="livrator">
  <option value="---">---</option>
    <option value="Popescu Andre">Popescu Andre</option>
    <option value="Manescu Mihai">Manescu Mihai</option>
    <option value="Ionescu Alexandru">Ionescu Alexandru</option>
  </select><br>

  <label for="status">Status:</label>
  <select name="status" id="status">
    <option value="IN PREGATIRE">IN PREGATIRE</option>
    <option value="IN CURS DE LIVRARE">IN CURS DE LIVRARE</option>
    <option value="LIVRATA">LIVRATA</option>
  </select><br>



  <input type="submit" name="submit" value="Aplica">
</form>


</div>

      </div>
    </main>
  </div>
</body>
</html>