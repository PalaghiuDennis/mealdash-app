<?php
include "db_conn.php";
if (isset($_POST['submit'])) {
    $angajatID = $_POST['angajatID'];
    $nume = $_POST['nume'];
    $email = $_POST['email'];
    $parola = $_POST['parola'];
    $telefon = $_POST['telefon'];
    $functie = $_POST['functie'];
    $status = $_POST['status'];
  
    // Actualizează înregistrarea angajatului în baza de date
    $sql = "UPDATE angajati SET nume='$nume', email='$email', parola='$parola', telefon='$telefon', functie='$functie', status='$status' WHERE angajatID='$angajatID'";
    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Datele angajatului au fost actualizate cu succes!');</script>";
        echo "<script>window.location.href = 'http://localhost/Proiect/Admin/angajati.php';</script>";
      } else {
        echo "<script>alert('Eroare la actualizarea datelor angajatului: " . $connection->error . "');</script>";
        echo "<script>window.location.href = 'http://localhost/Proiect/Admin/angajati.php';</script>";
      }
  }
  ?>