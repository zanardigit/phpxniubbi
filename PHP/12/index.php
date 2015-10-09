<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 12. Funzione personalizzata
 * @version 2015-10-09
 */

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = array(
    'Francesco' => 'Programmatore',
    'Matteo' => 'Programmatore',
    'Marco' => 'Devops',
    'Patrizia' => 'Grafica'
);
$numberOfStudents = count($students);

// Richiamo una funzione personalizzata
$coffeeCost = getCoffeeCost();

// funzione personalizzata
function getCoffeeCost()
{
    $singleCoffeeCost = 1;
    $numberOfStudents = 4;
    $totalCost = $singleCoffeeCost * $numberOfStudents;

    return $totalCost;
}

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