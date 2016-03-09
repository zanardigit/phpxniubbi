<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 17. Inclusione di file esterno (funzioni)
 * @version 2016-03-07
 */

// Inclusione di un file
require_once 'functions.php';

// Meglio ancora, specificando una costante di sistema che rappresenta la cartella in cui mi trovo
require_once __DIR__ . '/functions.php';

// Tutti i modi possibili di includere un file:
// include 'functions.php';
// include_once 'functions.php';
// require 'functions.php';
// require_once 'functions.php';

// Blocco principale del programma
$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);

?>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $message ?></h1>
        <p>Il numero degli studenti è <?= $numberOfStudents ?></p>
        <h2>Elenco degli studenti</h2>
        <ul>
            <?php foreach ($students as $studentCode => $studentName): ?>
                <li>
                    <strong style="color: red">
                        <?= $studentCode ?>
                    </strong>
                    <?= $studentName ?>
                </li>
            <?php endforeach ?>
        </ul>
        <p>Il costo totale del caffè è <?= $coffeeCost ?></p>
    </body>
</html>