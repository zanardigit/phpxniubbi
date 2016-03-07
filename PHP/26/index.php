<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 26. Uso degli oggetti
 * @version 2016-03-07
 */

require_once __DIR__ . '/functions.php';

$course = new stdClass;
$course->title              = "Corso Codemaster";
$course->message            = "Benvenuti al corso PHP di CodeMaster!";
$course->students           = getStudents();
$course->numberOfStudents   = count($course->students);

$coffeeCost = getCoffeeCost($course->numberOfStudents);

// Includo il layout richiesto
$layoutFile = getLayoutFile();
include $layoutFile;