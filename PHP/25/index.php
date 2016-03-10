<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 25. Scrivi su CSV
 * @version 2016-03-10
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

// Includo il layout richiesto
$layoutFile = getLayoutFilePath();
include $layoutFile;