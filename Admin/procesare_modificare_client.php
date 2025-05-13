<?php
include "db_conn.php";
if (isset($_POST['submit'])) {
    $clientID = $_POST['clientID'];
    $nume = $_POST['nume'];
    $email = $_POST['email'];
    $parola = $_POST['parola'];
    $telefon = $_POST['telefon'];
    $adresa = $_POST['adresa'];
  
    // Actualizează înregistrarea angajatului în baza de date
    $sql = "UPDATE clienti SET nume='$nume', email='$email', parola='$parola', telefon='$telefon', adresa='$adresa' WHERE clientID='$clientID'";
    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Datele clientului au fost actualizate cu succes!');</script>";
        echo "<script>window.location.href = 'http://localhost/Proiect/Admin/customers.php';</script>";
      } else {
        echo "<script>alert('Eroare la actualizarea datelor angajatului: " . $connection->error . "');</script>";
        echo "<script>window.location.href = 'http://localhost/Proiect/Admin/customers.php';</script>";
      }
  }
  ?>client