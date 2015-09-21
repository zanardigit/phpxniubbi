<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 16. Inclusione di file esterno (layout)
 */

require_once __DIR__ . '/functions.php';

$course = "Codemaster";
if ($course == "Codemaster") {
    define("TITLE", "Questo è il corso Codemaster di TAG");
}
else {
    define("TITLE", "Questo è un altro corso");
}
$message = "Benvenuti al corso!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);

include __DIR__ . '/home.php';
