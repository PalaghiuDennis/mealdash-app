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
        
        <a href="http://localhost/Proiect/Admin/products.php">
        <span class="material-icons-sharp">inventory</span>
        <h3>Produse</h3></a>
        
        <a href="http://localhost/Proiect/Admin/add_products.php" class="active">
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
         <div class="container2">
         <?php if (isset($_GET['error'])): ?>
			   <p class="error"><?php echo $_GET['error']; ?></p>
		     <?php endif ?>
         <form action="upload.php" method="post" enctype="multipart/form-data">
            
      <label for="my_image">Imagine:</label>
	    <input type="file" name="my_image" id="my_image">

			<label for="nume">Nume:</label>
			<input type="text" name="nume" id="nume" placeholder="Numele felului de mâncare">

			<label for="descriere">Descriere:</label>
			<textarea name="descriere" id="descriere" placeholder="Descrierea felului de mâncare"></textarea>

			<label for="categorie">Categorie:</label>
			<div class="select">
      <select input type="text" name="categorie" id="categorie">
      <option value="" disabled selected hidden>Categoria felului de mâncare</option>
      <option value="Burge">Burger</option>
      <option value="Pizza">Pizza</option>
      <option value="Paste">Paste</option>
      <option value="Aperitive">Aperitive</option>
      <option value="Supe și Ciorbe">Supe și Ciorbe</option>
      <option value="Salate">Salate</option>
      <option value="Fel principal">Fel principal</option>
      <option value="Sushi">Sushi</option>
      </select>
      </div>

			<label for="pret">Preț:</label>
			<input type="text" name="pret" id="pret" placeholder="Prețul felului de mâncare">

			<input type="submit" name="submit" value="Încarcă">
		   </form>
	     </div>
       </main>
       </div> 
       </body>
       </html>


     



