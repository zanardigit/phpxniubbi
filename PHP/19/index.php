<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 19. Variabili globali e scelta del layout
 * @version 2016-03-08
 */

require_once __DIR__ . '/functions.php';

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);

if ($_GET["page"] == "home") {
    include __DIR__ . "/layouts/home.php";
}

if ($_GET["page"] == "students") {
    include __DIR__ . "/layouts/students.php";
}
