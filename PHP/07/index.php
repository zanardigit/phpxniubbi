<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 07. Separazione dell'HTML
 */

define("TITLE", "Questo è il corso Codemaster di TAG");
$message = "Benvenuti al corso!";
$numberOfStudents = 4;
$students = ['Francesco', 'Matteo', 'Marco', 'Patrizia'];
?>

<html>
    <head>
        <title><?php echo TITLE ?></title>
    </head>
    <body>
        <h1><?php echo $message ?></h1>
        <p>Il numero degli studenti è <?php echo $numberOfStudents ?></p>
        <h2>Elenco degli studenti</h2>
        <ul>
            <li><?php echo $students[0] ?></li>
            <li><?php echo $students[1] ?></li>
            <li><?php echo $students[2] ?></li>
            <li><?php echo $students[3] ?></li>
        </ul>
    </body>
</html>