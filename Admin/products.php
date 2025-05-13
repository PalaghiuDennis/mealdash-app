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
  <!--Favicon Icon-->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/logo.png" rel="logo">
</head>
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
        
        <a href="http://localhost/Proiect/Admin/products.php" class="active">
        <span class="material-icons-sharp">inventory</span>
        <h3>Produse</h3></a>
        
        <a href="http://localhost/Proiect/Admin/add_products.php">
        <span class="material-icons-sharp">add</span>
        <h3>Adauga Produs</h3></a>

        <a href="http://localhost/Proiect/Admin/angajati.php">
        <span class="material-icons-sharp">badge</span>
        <h3>Angajati</h3></a>
                
        <a href="http://localhost/Proiect/Admin/login.php">
        <span class="material-icons-sharp">logout</span>
        <h3>Sign Out</h3></a>
      </div>
      </aside>
            <!--Main-->
         <main>
         <form action="./" method="get">
          <div class="searchbar">
              <input id="gfg" type="text" class="searchbar__input" name="q" placeholder="Search">
              <button type="reset" class="searchbar__button">
                  <i class="material-icons-sharp">search</i>
              </button>
          </div>
      </form>
         <div class="scroll">
         <table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nume</th>
			<th>Descriere</th>
			<th>Preț</th>
			<th>Categorie</th>
			<th>Imagine</th>
      <th></th>
		</tr>
	</thead>
	<tbody id="geeks">
  <?php
		include "db_conn.php";

		$sql = "SELECT * FROM mancare";
		$result = $connection->query($sql);

		if (!$result) {
			die("Invalid query: " . $connection->error);
		}

		while ($row = $result->fetch_assoc()) {
      $mancareID=$row['id'];
			echo "<tr>
					<td>" . $row["id"] . "</td>
					<td>" . $row["nume"] . "</td>
					<td>" . $row["descriere"] . "</td>
					<td>" . $row["pret"] . "</td>
					<td>" . $row["categorie"] . "</td>
					<td><img src='uploads/" . $row["imagine"] . "' width='100' height='150'></td>";
          echo '<td><form action="pagina_detalii_mancare.php" method="POST">';
          echo '<input type="hidden" name="mancareID" value="' . $mancareID . '">';
          echo '<input type="submit" value="info                                               ">';
          echo '</form></td>';  
          echo '</tr>';
		}
		?>
	</tbody>
</table>
        <script>
        $(document).ready(function() {
            $("#gfg").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#geeks tr").filter(function() {
                    $(this).toggle($(this).text()
                    .toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
        </div> 
      </div>
        </body>
        </html>