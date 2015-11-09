<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 25. Uso delle classi
 * @version 2015-11-08
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
$coffee = new Coffee();
$coffeeCost = getCost($numberOfStudents);
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
