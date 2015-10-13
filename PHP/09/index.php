<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 09. Separazione dell'HTML
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
        <title><?php echo $title ?></title>
        <p>Oggi è il <?php echo $date ?></p>
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