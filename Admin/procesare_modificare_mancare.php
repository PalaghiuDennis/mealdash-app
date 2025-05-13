<?php
include "db_conn.php";
if (isset($_POST['submit'])) {
    $mancareID = $_POST['mancareID'];
    $nume = $_POST['nume'];
    $descriere = $_POST['descriere'];
    $pret = $_POST['pret'];
    $categorie = $_POST['categorie'];
  
    // Actualizează înregistrarea angajatului în baza de date
    $sql = "UPDATE mancare SET nume='$nume', descriere='$descriere', pret='$pret', categorie='$categorie' WHERE id='$mancareID'";
    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('Datele mancari au fost actualizate cu succes!');</script>";
        echo "<script>window.location.href = 'http://localhost/Proiect/Admin/products.php';</script>";
      } else {
        echo "<script>alert('Eroare la actualizarea datelor mancarii: " . $connection->error . "');</script>";
        echo "<script>window.location.href = 'http://localhost/Proiect/Admin/products.php';</script>";
      }
  }
  ?>client