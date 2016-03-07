<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 24. Leggi da CSV
 * @version 2016-03-07
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
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);
setCookies();

// Includo il layout richiesto
$layoutFile = getLayoutFile();
include $layoutFile;
