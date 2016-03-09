<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 12. Array con chiavi numeriche esplicitate
 * @version 2016-03-08
 */
$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = [
    0 => "Francesco",
    1 => "Matteo",
    2 => "Marco",
    3 => "Patrizia"
];
$numberOfStudents = count($students);
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
            <?php foreach ($students as $student): ?>
                <li>
                    <div class="studente">
                        <?= $student ?>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
        <hr>
    </body>
</html>