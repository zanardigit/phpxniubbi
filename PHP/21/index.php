<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 21. Filter input
 * @version 2016-03-07
 */

require_once __DIR__ . '/functions.php';

// Recupero automaticamente l'indirizzo del sito
$url = filter_input(INPUT_SERVER, 'HTTP_HOST');
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

// Includo il layout richiesto
$layoutFile = getLayoutFile();
include $layoutFile;