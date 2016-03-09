<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 21. Filter input
 * @version 2016-03-07
 */

require_once __DIR__ . '/functions.php';

// Recupero automaticamente l'indirizzo del sito
$url = filter_input(INPUT_SERVER, 'HTTP_HOST');
if ($url == "codemaster.local") {
    $title = "Codemaster DEV";
    ini_set('display_errors', 'on');
    ini_set('error_reporting', E_ALL);
}
else {
    $title = "Corso Codemaster";
    ini_set('display_errors', 'off');
    ini_set('error_reporting', E_NONE);
}

$message = "Benvenuti al corso PHP di CodeMaster!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);

// Includo il layout richiesto
$layoutFile = getLayoutFile();
include $layoutFile;