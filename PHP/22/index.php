<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 22. Scrivi su CSV
 */

require_once __DIR__ . '/functions.php';

$page = filter_input(INPUT_GET, 'page');
$url = filter_input(INPUT_SERVER, 'http_host');
if ($url == "http://codemaster.local") {
    define("TITLE", "Questo è il corso Codemaster di TAG");
}
else {
    define("TITLE", "Questo è un altro corso");
}

$message = "Benvenuti al corso!";
if (addStudent()) {
    $message = "Nuovo studente aggiunto";
}

$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);
setCookies();

switch ($page) {
    case 'students':
        include __DIR__ . '/students.php';
        break;

    case 'home':
    default:
        include __DIR__ . '/home.php';
}