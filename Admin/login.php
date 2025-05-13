<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MealDash</title>
  <link rel="stylesheet" href="assets/css/login.css">
  <!--Favicon-->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/logo.png" rel="logo">
</head>
<?php
        include "db_conn.php";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $parola = $_POST['parola'];
        
            // Verifica daca emailul si parola exista in baza de date
            $sql = "SELECT * FROM angajati WHERE email = '$email' AND parola = '$parola'";
            $result = $connection->query($sql);
        
            if ($result->num_rows > 0) {
                // Autentificare reusita, redirecționează către pagina comenzi.php
                header("Location: comenzi.php");
                exit();
            } else {
                // Autentificare esuata, afiseaza un mesaj de eroare
                echo "Email sau parolă incorectă.";
            }
        }


?>
<body>
<div class="logo text-center">
  <img src="assets/img/logo.png" alt="image description">
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Conecteaza-te</h2>
    <form action="" id="formvalidate" method="POST">
      <div class="input-group">
        <label class="palceholder" for="userName">Email</label>
        <input class="form-control" name="email" id="userName" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userPassword">Parola</label>
        <input class="form-control" name="parola" id="userPassword" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>

      <button type="submit" id="login">Conecteaza-te</button>
    </form>
  </div>
</div>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="assets/script.js"></script>



</body>
</html>