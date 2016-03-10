<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 20. Funzione esterna per decidere quale file includere
 * @version 2016-03-10
 */

require_once __DIR__ . '/functions.php';

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);

// Includo il layout richiesto
$layoutFile = getLayoutFilePath();
include $layoutFile;
