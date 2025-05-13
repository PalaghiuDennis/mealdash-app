<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verificăm dacă există un ID de item în cererea POST
    if (isset($_POST["itemId"])) {
        $itemId = $_POST["itemId"];

        // Calea către fișierul comanda.txt
        $filePath = "comanda.txt";

        // Citim conținutul fișierului într-un array
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Căutăm id-ul în array și îl eliminăm
        $key = array_search($itemId, $lines);
        if ($key !== false) {
            unset($lines[$key]);
        }

        // Reconstruim conținutul fișierului
        $content = implode(PHP_EOL, $lines);

        // Scriem conținutul înapoi în fișier
        file_put_contents($filePath, $content);

        // Răspunsul către client (opțional)
        echo "Itemul a fost șters cu succes din fișier.";
    } else {
        // Răspuns de eroare către client (dacă nu există ID de item în cerere)
        http_response_code(400);
        echo "Eroare: ID-ul item-ului lipsește în cerere.";
    }
} else {
    // Răspuns de eroare către client (dacă cererea nu este de tip POST)
    http_response_code(405);
    echo "Eroare: Cererea trebuie să fie de tip POST.";
}
?>