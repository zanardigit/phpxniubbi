<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 27. Uso di oggetti
 * @version 2016-03-10
 */

define("LAYOUTS_DIR", __DIR__ . "/layouts");
define("DEFAULT_LAYOUT", LAYOUTS_DIR . "/home.php");

require_once __DIR__ . '/functions.php';

$course = new stdClass;
$course->title              = "Corso Codemaster";
$course->message            = "Benvenuti al corso PHP di CodeMaster!";
$course->students           = getStudents();
$course->numberOfStudents   = count($course->students);

$coffeeCost = getCoffeeCost($course->numberOfStudents);

// Includo il layout richiesto
$layoutFile = getLayoutFilePath();
include $layoutFile;