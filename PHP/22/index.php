<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 22. Scrivi su CSV
 */

require_once __DIR__ . '/functions.php';

$url = filter_input(INPUT_SERVER, 'http_host');
if ($url == "http://codemaster.local") {
    $title = "Corso Codemaster";
}
else {
    $title = "Ignoto";
}

$message = "Benvenuti al corso PHP di CodeMaster!";
$result = addStudent();
if ($result == true) {
    $message = "Nuovo studente aggiunto";
}

$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);
setCookies();

$page = filter_input(INPUT_GET, 'page');
switch ($page) {
    case 'students':
        include __DIR__ . '/students.php';
        break;

    case 'home':
    default:
        include __DIR__ . '/home.php';
}
