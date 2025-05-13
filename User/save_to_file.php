<?php
if (isset($_POST['itemId'])) {
    $itemId = $_POST['itemId'];

    // Calea către fișierul comanda.txt
    $filePath = 'comanda.txt';

    // Deschide fișierul în modul "a" (adăugare)
    $file = fopen($filePath, 'a');

    // Adaugă ID-ul în fișier, urmat de un rând nou
    fwrite($file, $itemId . PHP_EOL);

    // Închide fișierul
    fclose($file);

    // Răspuns către client
    echo 'ID-ul a fost adăugat în fișierul comanda.txt.';
} else {
    // Răspuns către client în cazul în care nu s-a primit ID-ul
    echo 'Eroare: ID-ul nu a fost primit.';
}
?>