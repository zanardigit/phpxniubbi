<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 11. Blocco if e conteggio di un array
 * @version 2015-10-13
 */

// Assegnazione
$timeOfTheDay = date("H", time());

// Controllo
if ($timeOfTheDay > 16) {
    $greeting = "Buona sera!";
}
else {
    $greeting = "Buon giorno!";
}

// Stessa cosa con un operatore ternario
$greeting = $timeOfTheDay > 16 ? "Buona sera" : "Buon giorno";

$message = "Benvenuti al corso PHP di CodeMaster!";
$students = array('Francesco', 'Matteo', 'Marco', 'Patrizia', 'Enrico', 'Ruben');

// Conteggio di un array
$numberOfStudents = count($students);
?>

<html>
    <head>
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $message ?></h1>
        <p><?= $greeting ?>
        <p>Il numero degli studenti è <?= $numberOfStudents ?></p>
        <h2>Elenco degli studenti</h2>
        <ul>
            <?php
            foreach ($students as $student) {
                echo "<li>" . $student . "</li>";
            }
            ?>
        </ul>
    </body>
</html>