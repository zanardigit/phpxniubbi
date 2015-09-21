<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 17. Switch e variabili globali
 */

require_once __DIR__ . '/functions.php';

$course = "Codemaster";
if ($course == "Codemaster") {
    define("TITLE", "Questo è il corso Codemaster di TAG");
}
else {
    define("TITLE", "Questo è un altro corso");
}
$message = "Benvenuti al corso!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);

switch ($_GET['page']) {
    case 'students':
        include __DIR__ . '/students.php';
        break;

    case 'home':
    default:
        include __DIR__ . '/home.php';
}
