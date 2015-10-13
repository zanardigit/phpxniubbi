<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 12. Ciclo foreach e incremento di variabili numeriche
 * @version 2015-10-13
 */

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = array('Francesco', 'Matteo', 'Marco', 'Patrizia');

// Versione estesa
$numberOfStudents = 0;
foreach ($students as $student) {
    $numberOfStudents = $numberOfStudents + 1;
}

// Stessa cosa utilizzando la notazione abbreviata
$numberOfStudents = 0;
foreach ($students as $student) {
    $numberOfStudents += 1;
}

// Stessa cosa utilizzando l'operatore di incremento singolo
$numberOfStudents = 0;
foreach ($students as $student) {
    $numberOfStudents ++;
}

?>

<html>
    <head>
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $message ?></h1>
        <p>Il numero degli studenti è <?= $numberOfStudents ?></p>
        <h2>Elenco degli studenti</h2>
        <ul>
            <?php foreach ($students as $student): ?>
                <li>
                    <img src="/images/<?= $student ?>.png">
                    <div class="studente">
                        <?= $student ?>
                    </div>
                    <hr>
                </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>