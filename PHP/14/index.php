<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 14. Altra funzione personalizzata
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
<?php

/**
 * Calcola il costo totale del caffè in base al numero di studenti e al costo
 * del singolo caffè
 *
 * @param   int $numberOfStudents
 * @param   int $singleCoffeeCost default 1 se non specificato
 * @return  int
 */
function getCoffeeCost($numberOfStudents, $singleCoffeeCost = 1)
{
    $totalCost = $singleCoffeeCost * $numberOfStudents;

    return $totalCost;
}

/**
 * Ottiene l'elenco degli studenti
 *
 * @return array
 */
function getStudents()
{
    $students = [
        'Francesco' => 'Programmatore',
        'Matteo' => 'Programmatore',
        'Marco' => 'Devops',
        'Patrizia' => 'Grafica'
    ];

    return $students;
}