<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 13. Array con chiavi di tipo stringa
 * @version 2016-03-08
 */

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = [
    "P001" => "Francesco",
    "P002" => "Matteo",
    "D001" => "Marco",
    "G001" => "Patrizia",
];
$numberOfStudents = count($students);

// Per accedere a uno specifico elemento si può usare la chiave, es.
// echo $students['P001']; // Stampa "Francesco"
// echo $students['G001']; // Stampa "Patrizia"

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
    </body>
</html>