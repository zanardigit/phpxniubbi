<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 16. Altra funzione personalizzata
 * @version 2015-10-13
 */

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