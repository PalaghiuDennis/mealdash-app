<?php
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $comandaID = $_POST["comandaID"];
  $livrator = $_POST["livrator"];
  $status = $_POST["status"];

  $telefonQuery = "SELECT telefon FROM angajati WHERE nume='$livrator'";
  $telefonResult = $connection->query($telefonQuery);
  $telefonRow = $telefonResult->fetch_assoc();
  $telefon = $telefonRow['telefon'];
  
  $angajatIDQuery = "SELECT angajatID FROM angajati WHERE nume='$livrator'";
  $angajatIDResult = $connection->query($angajatIDQuery);
  $angajatIDRow = $angajatIDResult->fetch_assoc();
  $angajatID = $angajatIDRow['angajatID'];

  if ($status == "LIVRATA") {
      $data_livrare = date("Y-m-d H:i:s");
$sql = "UPDATE comenzi SET PersonaLivrareNume='$livrator', statusc='$status', PersonaLivrareID='$angajatID', telefonLivrator='$telefon', data_livrare='$data_livrare' WHERE comandaID='$comandaID'";
  } else {
      $sql = "UPDATE comenzi SET PersonaLivrareNume='$livrator', statusc='$status' WHERE comandaID='$comandaID'";
  }

  if ($connection->query($sql) === TRUE) {
    echo "<script>alert('Datele livrari au fost actualizate cu succes!');</script>";
    echo "<script>window.location.href = 'http://localhost/Proiect/Admin/comenzi.php';</script>";
  } else {
    echo "<script>alert('Eroare la actualizarea datelor livrari: " . $connection->error . "');</script>";
    echo "<script>window.location.href = 'http://localhost/Proiect/Admin/comenzi.php';</script>";
  }
}
  ?>