<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MealDash</title>
  <!--Material Icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
  rel="stylesheet">
  <!--Stylesheet-->
  <link rel="stylesheet" href="assets/css/style.css">
  <!--Favicon-->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/logo.png" rel="logo">
</head>
  <!--Script-->
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
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
        <h3>Clienti</h3></a>

        <a href="http://localhost/Proiect/Admin/comenzi.php">
        <span class="material-icons-sharp">receipt_long</span>
        <h3>Comenzi</h3></a>
        
        <a href="http://localhost/Proiect/Admin/products.php">
        <span class="material-icons-sharp">inventory</span>
        <h3>Produse</h3></a>
        
        <a href="http://localhost/Proiect/Admin/add_products.php">
        <span class="material-icons-sharp">add</span>
        <h3>Adauga Produs</h3></a>

        <a href="http://localhost/Proiect/Admin/angajati.php" class="active">
        <span class="material-icons-sharp">badge</span>
        <h3>Angajati</h3></a>
                
        <a href="http://localhost/Proiect/Admin/login.php">
        <span class="material-icons-sharp">logout</span>
        <h3>Sign Out</h3></a>
      </div>
      </aside>
      <!--Main-->
         <main>
         
      <table class="table2">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Nume</th>
                <th>Email</th>
                <th>Parola</th>
                <th>Telefon</th>
                <th>Functie</th>
                <th>Status</th>
                <th></th>
            </tr>
            
        </thead>
        </main>
        <?php
        include "db_conn.php";

        $sql="SELECT * FROM angajati";
        $result=$connection->query($sql);

        if(!$result){

          die("Invalid query: " . $connection->error);
        }
        
        while($row=$result->fetch_assoc()){
          $angajatID=$row['angajatID'];
          echo "<tr>
          <td>" . $row["angajatID"] . "</td>
          <td>" . $row["nume"] . "</td>
          <td>" . $row["email"] . "</td>
          <td>" . $row["parola"] . "</td>
          <td>" . $row["telefon"] . "</td>
          <td>" . $row["functie"] . "</td>
          <td>" . $row["status"] . "</td>";

          echo '<td><form action="pagina_detalii_angajat.php" method="POST">';
          echo '<input type="hidden" name="angajatID" value="' . $angajatID . '">';
          echo '<input type="submit" value="info                                               ">';
          echo '</form></td>';  
          echo '</tr>';
   
        }
        
         ?>
           
        </table>

  
        </div> 
      </div>
        </body>
        </html>