<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 15. Funzione personalizzata con parametri
 * @version 2016-03-08
 */

function getCoffeeCost($numberOfPeople, $singleCost)
{
    $totalCost = $numberOfPeople * $singleCost;

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
$numberOfStudents = count($students);
$singleCoffeeCost = 1;

// Richiamo la funzione personalizzata passando un parametro
$coffeeCost = getCoffeeCost($numberOfStudents, $singleCoffeeCost);

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