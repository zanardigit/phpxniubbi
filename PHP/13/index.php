<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 13. Array associativo
 * @version 2015-10-09
 */

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
//$students = array(
//    0 => 'Francesco',
//    1 => 'Matteo',
//    2 => 'Marco',
//    3 => 'Patrizia'
//);
$students = array(
    'Francesco' => 'Programmatore',
    'Matteo' => 'Programmatore',
    'Marco' => 'Devops',
    'Patrizia' => 'Grafica'
);
$numberOfStudents = count($students);

echo $students['Francesco']; // 'Programmatore'
echo $students['Marco']; // 'Devops'

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
            <?php foreach ($students as $name => $role): ?>
                <li><strong><?= $name ?></strong> (<?= $role ?>)</li>
            <?php endforeach ?>
        </ul>
    </body>
</html>