<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * Separazione dell'HTML con comandi abbreviati
 */

define("TITLE", "Questo è il corso Codemaster di TAG");
$message = "Benvenuti al corso!";
$numberOfStudents = 4;
$students = ['Francesco', 'Matteo', 'Marco', 'Patrizia'];
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
            <li><?= $students[0] ?></li>
            <li><?= $students[1] ?></li>
            <li><?= $students[2] ?></li>
            <li><?= $students[3] ?></li>
        </ul>
    </body>
</html>