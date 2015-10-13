<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 10. Separazione dell'HTML con comandi abbreviati
 * @version 2015-10-13
 */

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$numberOfStudents = 4;
$students = array('Francesco', 'Matteo', 'Marco', 'Patrizia');

$date = date("d M Y", time());
?>

<html>
    <head>
        <title><?= $title ?></title>
        <p>Oggi è il <?= $date ?></p>
    </head>
    <body>
        <h1><?= $message ?></h1>
        <p>Il numero degli studenti è <?= $numberOfStudents ?></p>
        <h2>Elenco degli studenti</h2>
        <ul>
            <li><?= $students[0] ?></li>
            <li><?= $students[1] ?></li>
            <li><?= $students[2] ?></li>
            <li><?= $students[3] ?></li>
        </ul>
    </body>
</html>