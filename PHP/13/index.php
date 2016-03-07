<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 13. Array associativo
 * @version 2016-03-07
 */

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = [
    'Francesco' => 'Programmatore',
    'Matteo' => 'Programmatore',
    'Marco' => 'Devops',
    'Patrizia' => 'Grafica'
];
$numberOfStudents = count($students);

// Per accedere a uno specifico elemento si può usare la chiave, es.
// echo $students['Francesco']; // Stampa 'Programmatore'
// echo $students['Marco']; // Stampa 'Devops'

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
            <?php foreach ($students as $name => $role): ?>
                <li><strong><?= $name ?></strong> (<?= $role ?>)</li>
            <?php endforeach ?>
        </ul>
    </body>
</html>