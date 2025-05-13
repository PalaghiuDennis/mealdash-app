
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

        <a href="http://localhost/Proiect/Admin/comenzi.php">
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

        <a href="http://localhost/Proiect/Admin/angajati.php" class="active">
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
      <div class="container2">
      <?php
include "db_conn.php";
if (isset($_POST['angajatID'])) {
  $angajatID = $_POST['angajatID'];} 



// Interogare pentru a selecta datele angajatului cu angajatID specific
$sql = "SELECT * FROM angajati WHERE angajatID = '$angajatID'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
  // Se afișează datele angajatului și se oferă posibilitatea de modificare
  $row = $result->fetch_assoc();
  $nume = $row['nume'];
  $email = $row['email'];
  $parola = $row['parola'];
  $telefon = $row['telefon'];
  $functie = $row['functie'];
  $status = $row['status'];
}

?>

<div class="detalii_angajat">
<h2>Modificare date angajat</h2>
  <form action="procesare_modificare_angajat.php" method="POST">
  <input type="hidden" name="angajatID" value="<?php echo $angajatID; ?>">
<label for="nume">Nume:</label> <input type="text" name="nume" id="nume" value="<?php echo $nume; ?>"><br>
<label for="email">Email:</label> <input type="text" name="email" id="email" value="<?php echo $email; ?>"><br>
<label for="parola">Parola:</label> <input type="password" name="parola" id="parola" value="<?php echo $parola; ?>"><br>
<label for="telefon">Telefon:</label> <input type="text" name="telefon" id="telefon" value="<?php echo $telefon; ?>"><br>
<label for="functie">Funcție:</label> <input type="text" name="functie" id="functie" value="<?php echo $functie; ?>"><br>
<label for="status">Status:</label> <input type="text" name="status" id="status" value="<?php echo $status; ?>"><br>


    <input type="submit" name="submit" value="Modifică">
  </form>
</div>

      </div>
    </main>
  </div>
</body>
</html>
