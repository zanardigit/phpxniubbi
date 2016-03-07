<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 22. Sessione
 * @version 2016-03-07
 */

require_once __DIR__ . '/functions.php';

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

session_start();
if (empty($_SESSION['id_visitatore'])) {
    $_SESSION['id_visitatore'] = rand(100, 999);
}

// Includo il layout richiesto
$layoutFile = getLayoutFile();
include $layoutFile;
