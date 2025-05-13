<?php
include("include/connection.php");

function updateTelefon($email, $telefon) {
    include("include/connection.php");
    // Escapă caracterele speciale pentru a preveni SQL injection
    $email = mysqli_real_escape_string($connection, $email);
    $telefon = mysqli_real_escape_string($connection, $telefon);

    // Construiește interogarea SQL pentru a actualiza numărul de telefon
    $query = "UPDATE clienti SET telefon = '$telefon' WHERE email = '$email'";

    // Execută interogarea către baza de date
    $result = mysqli_query($connection, $query);

    // Închide conexiunea la baza de date
    mysqli_close($connection);

    // Returnează rezultatul actualizării (true sau false)
    return $result;
}

function updateAdresa($email, $adresa) {
    include("include/connection.php");
    // Escapă caracterele speciale pentru a preveni SQL injection
    $email = mysqli_real_escape_string($connection, $email);
    $adresa = mysqli_real_escape_string($connection, $adresa);

    // Construiește interogarea SQL pentru a actualiza adresa
    $query = "UPDATE clienti SET adresa = '$adresa' WHERE email = '$email'";

    // Execută interogarea către baza de date
    $result = mysqli_query($connection, $query);

    // Închide conexiunea la baza de date
    mysqli_close($connection);

    // Returnează rezultatul actualizării (true sau false)
    return $result;
}

function updateParola($email, $parola) {
    include("include/connection.php");
    // Escapă caracterele speciale pentru a preveni SQL injection
    $email = mysqli_real_escape_string($connection, $email);
    $parola = mysqli_real_escape_string($connection, $parola);

    // Construiește interogarea SQL pentru a actualiza parola
    $query = "UPDATE clienti SET parola = '$parola' WHERE email = '$email'";

    // Execută interogarea către baza de date
    $result = mysqli_query($connection, $query);

    // Închide conexiunea la baza de date
    mysqli_close($connection);

    // Returnează rezultatul actualizării (true sau false)
    return $result;
}

if (isset($_GET['email'])) {
    $email = $_GET['email'];

    // Verifică ce parametri au fost trimiși și actualizează în consecință datele utilizatorului
    if (isset($_GET['telefon'])) {
        $telefon = $_GET['telefon'];
        if (updateTelefon($email, $telefon)) {
            header("Location: profil.php?email=$email&message=Numarul%20de%20telefon%20a%20fost%20actualizat%20cu%20succes!");
            exit();
        } else {
            header("Location: profil.php?email=$email&error=Eroare%20la%20actualizarea%20numarului%20de%20telefon.");
            exit();
        }
    }

    if (isset($_GET['adresa'])) {
        $adresa = $_GET['adresa'];
        if (updateAdresa($email, $adresa)) {
            header("Location: profil.php?email=$email&message=Adresa%20a%20fost%20actualizata%20cu%20succes!");
            exit();
        } else {
            header("Location: profil.php?email=$email&error=Eroare%20la%20actualizarea%20adresei.");
            exit();
        }
    }

    if (isset($_GET['parola'])) {
        $parola = $_GET['parola'];
        if (updateParola($email, $parola)) {
            header("Location: profil.php?email=$email&message=Parola%20a%20fost%20actualizata%20cu%20succes!");
            exit();
        } else {
            header("Location: profil.php?email=$email&error=Eroare%20la%20actualizarea%20parolei.");
            exit();
        }
    }
} else {
    header("Location: profil.php?error=Emailul%20nu%20a%20fost%20specificat.");
    exit();
}
?>