<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 18. Inclusione di file esterno (layout)
 * @version 2015-10-13
 */

require_once __DIR__ . '/functions.php';

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);

include __DIR__ . '/home.php';
