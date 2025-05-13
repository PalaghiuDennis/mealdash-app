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
<?php
include("include/connection.php");

function searchUser($email,$parola) {
    global $connection;
    global $parola;
    // Realizează o interogare pentru a căuta utilizatorul în baza de date
    $query = "SELECT * FROM clienti WHERE email = '$email' AND parola='$parola'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        // Utilizatorul există în baza de date
        return true;
    } else {
        // Utilizatorul nu există în baza de date
        return false;
    }
}

function createUser($nume, $email, $parola) {
    global $connection;
    $query = "SELECT * FROM clienti WHERE email = '$email'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        // Utilizatorul există în baza de date
        return false;
    } else {  
    // Inserează noul utilizator în baza de date
    $query = "INSERT INTO clienti (nume, email, parola) VALUES ('$nume', '$email', '$parola')";
    $result = $connection->query($query);

    if ($result) {
        // Înregistrarea s-a realizat cu succes
        return true;
    } else {
        // A apărut o eroare la înregistrare
        return false;
    }}
}

function storeEmailInFile($email) {
    // Numele fișierului în care se va stoca adresa de email
    $filename = "email.txt";

    // Deschide fișierul în modul "append" (adaugă la conținutul existent)
    $file = fopen($filename, "a");

    if ($file) {
        // Scrie adresa de email în fișier
        fwrite($file, $email . "\n");

        // Închide fișierul
        fclose($file);

        // Returnează true pentru a indica succesul în stocarea adresei de email
        return true;
    } else {
        // Returnează false în caz de eroare la deschiderea fișierului
        return false;
    }
}

$warningMessage = "";

// Procesare formular de conectare
if (isset($_POST['submit-login'])) {
    $email = $_POST['email'];
    $parola = $_POST['parola'];
    $email = $GLOBALS['email'];
    $parola = $GLOBALS['parola'];

    // Verifică dacă utilizatorul există în baza de date și parola este corectă
    if (searchUser($email,$parola)) {
        // Utilizatorul există în baza de date
        // (Adaugă codul tău de verificare a parolei aici)
        $GLOBALS['email'] = $email;
        $GLOBALS['parola'] =$parola;
        // Dacă autentificarea este reușită, stochează adresa de email în fișier
        storeEmailInFile($email);
        
        // Redirecționează utilizatorul către pagina index.php
        header("Location: http://localhost/Proiect/User/user.php");
        exit();
    } else {
        $warningMessage = "Acest cont nu există.";
        // Utilizatorul nu există în baza de date sau parola este incorectă
        // (Adaugă mesajul de eroare corespunzător)
    }
}

// Procesare formular de înregistrare
if (isset($_POST['submit-register'])) {
    $nume = $_POST['nume'];
    $email = $_POST['email'];
    $parola = $_POST['parola'];

    // Verifică dacă utilizatorul există deja în baza de date
    if (searchUser($email,$parola)) {
        // Utilizatorul există deja în baza de date
        // (Adaugă mesajul de eroare corespunzător)
    } else {
        // Utilizatorul nu există în baza de date, deci îl putem crea
        if (createUser($nume, $email, $parola)) {
            // Înregistrarea s-a realizat cu succes
            // (Adaugă mesajul de succes corespunzător)
            
            // Dacă înregistrarea este reușită, stochează adresa de email în fișier
            storeEmailInFile($email);
            
            // Redirecționează utilizatorul către pagina index.php
            header("Location: http://localhost/Proiect/User/user.php");
            exit();
        } else {
            // A apărut o eroare la înregistrare
            echo '<script>alert("Exista deja un cont cu aceasta adresa de email");</script>';

        }
    }
}
?>
    
    <!-- Restul codului HTML -->
    <div class="cont">
        <div class="form sign-in">
            <h2>Bun Venit!</h2>
            <?php if (!empty($warningMessage)) : ?>
                <div class="warning"><?php echo $warningMessage; ?></div>
        <?php endif; ?>
            <form method="POST" action="">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required />
                </label>
                <label>
                    <span>Parola</span>
                    <input type="password" name="parola" required />
                </label>
                <button type="submit" name="submit-login" class="submit">Conectare</button>
            </form>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h3>Nu ai un cont? Te rog inscrie-te acum!</h3>
                </div>
                <div class="img__text m--in">
                    <h3>Dacă aveți deja un cont, trebuie doar să vă conectați.</h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Inscrie-te</span>
                    <span class="m--in">Conectare</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Creeaza-ti contul</h2>
                <form method="POST" action="">
                    <label>
                        <span>Nume</span>
                        <input type="text" name="nume" required />
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" required />
                    </label>
                    <label>
                        <span>Parola</span>
                        <input type="password" name="parola" required />
                    </label>
                    <button type="submit" name="submit-register" class="submit">Inscrie-te</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>
</html>
