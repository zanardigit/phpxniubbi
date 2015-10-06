<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 09. Blocco if e conteggio di un array
 */

// Assegnazione
$course = "Codemaster";

// Controllo
if ($course == "Codemaster") {
    define("TITLE", "Questo è il corso Codemaster di TAG");
}
else {
    define("TITLE", "Questo è un altro corso");
}
$message = "Benvenuti al corso!";
$students = ['Francesco', 'Matteo', 'Marco', 'Patrizia'];

// Conteggio di un array
$numberOfStudents = count($students);
?>

<html>
    <head>
        <title><?= TITLE ?></title>
    </head>
    <body>
        <h1><?= $message ?></h1>
        <p>Il numero degli studenti è <?= $numberOfStudents ?></p>
        <h2>Elenco degli studenti</h2>
        <ul>
            <?php foreach ($students as $student): ?>
                <li><?= $student ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>