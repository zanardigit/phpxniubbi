<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 20. Cookie
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

if (empty(filter_input(INPUT_COOKIE, 'id_visita'))) {
    setcookie('id_visita', rand(100, 999));
}
if (empty(filter_input(INPUT_COOKIE, 'id_visitatore'))) {
    setcookie('id_visitatore', rand(100, 999), time() + 60*60*24);
}

switch ($page) {
    case 'students':
        include __DIR__ . '/students.php';
        break;

    case 'home':
    default:
        include __DIR__ . '/home.php';
}
