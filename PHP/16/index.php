<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 16. Altra funzione personalizzata e parametro opzionale
 * @version 2016-03-08
 */

function getCoffeeCost($numberOfPeople, $singleCoffeeCost = 1)
{
    $totalCost = $singleCoffeeCost * $numberOfPeople;

    return $totalCost;
}

function getStudents()
{
    $students = [
        "P001" => "Francesco",
        "P002" => "Matteo",
        "D001" => "Marco",
        "G001" => "Patrizia",
    ];

    return $students;
}

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