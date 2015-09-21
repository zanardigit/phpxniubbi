<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 12. Funzione personalizzata
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
$students = [
    'Francesco' => 'Programmatore',
    'Matteo' => 'Programmatore',
    'Marco' => 'Devops',
    'Patrizia' => 'Grafica'
];

// Conteggio di un array
$numberOfStudents = count($students);

// Richiamo una funzione personalizzata
$coffeeCost = getCoffeeCost();
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
<?php

// funzione personalizzata
function getCoffeeCost()
{
    $singleCoffeeCost = 1;
    $numberOfStudents = 4;
    $totalCost = $singleCoffeeCost * $numberOfStudents;

    return $totalCost;
}
