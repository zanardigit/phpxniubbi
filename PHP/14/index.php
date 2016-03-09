<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 14. Funzione personalizzata
 * @version 2016-03-08
 */

// Definizione di una funzione personalizzata
function getCoffeeCost()
{
    $singleCoffeeCost = 1;
    $numberOfStudents = 4;
    $totalCost = $singleCoffeeCost * $numberOfStudents;

    return $totalCost;
}

// Blocco principale del programma
$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = [
    "P001" => "Francesco",
    "P002" => "Matteo",
    "D001" => "Marco",
    "G001" => "Patrizia",
];

// Richiamo la funzione personalizzata
$coffeeCost = getCoffeeCost();

?>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $message ?></h1>
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