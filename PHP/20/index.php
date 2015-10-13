<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 20. Filter input e variabili di ambiente
 * @version 2015-10-13
 */

require_once __DIR__ . '/functions.php';

// Recupero automaticamente l'indirizzo del sito
$url = filter_input(INPUT_SERVER, 'http_host');
if ($url == "http://codemaster.local") {
    $title = "Corso Codemaster";
}
else {
    $title = "Ignoto";
}

$message = "Benvenuti al corso PHP di CodeMaster!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);

$page = filter_input(INPUT_GET, 'page');
switch ($page) {
    case 'students':
        include __DIR__ . '/students.php';
        break;

    case 'home':
    default:
        include __DIR__ . '/home.php';
}
