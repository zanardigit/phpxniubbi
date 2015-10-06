<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 19. Sessione
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
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);

session_start();
if (empty($_SESSION['id_visitatore'])) {
    $_SESSION['id_visitatore'] = rand(100, 999);
}

switch ($page) {
    case 'students':
        include __DIR__ . '/students.php';
        break;

    case 'home':
    default:
        include __DIR__ . '/home.php';
}
