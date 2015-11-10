<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 23. Cookie
 * @version 2015-11-09
 */

require_once __DIR__ . '/functions.php';

$url = filter_input(INPUT_SERVER, 'HTTP_HOST');
if ($url == "http://codemaster.local") {
    $title = "Corso CodeMaster";
}
else {
    $title = "Ignoto";
}
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);

if (empty(filter_input(INPUT_COOKIE, 'id_visita'))) {
    setcookie('id_visita', rand(100, 999));
}
if (empty(filter_input(INPUT_COOKIE, 'id_visitatore'))) {
    setcookie('id_visitatore', rand(100, 999), time() + 60*60*24);
}

// Includo il layout richiesto
$layoutFile = getLayoutFile();
include $layoutFile;