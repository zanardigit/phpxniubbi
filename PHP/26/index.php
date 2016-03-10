<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 26. Uso di costanti
 * @version 2016-03-10
 */

define("LAYOUTS_DIR", __DIR__ . "/layouts");
define("DEFAULT_LAYOUT", LAYOUTS_DIR . "/home.php");

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