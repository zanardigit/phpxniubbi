<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 15. Inclusione di file esterno
 * @version 2015-10-09
 */

// Inclusione di un file
require_once 'functions.php';

// Meglio ancora, specificando una costante di sistema che rappresenta la cartella corrente
require_once __DIR__ . '/functions.php';

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);
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
            <?php foreach ($students as $name => $role): ?>
                <li><strong><?= $name ?></strong> (<?= $role ?>)</li>
            <?php endforeach ?>
        </ul>
        <p>Il costo totale del caffè è <?= $coffeeCost ?></p>
    </body>
</html>