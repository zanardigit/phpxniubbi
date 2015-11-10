<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 26. Uso degli oggetti
 * @version 2015-11-10
 */

require_once __DIR__ . '/functions.php';

$course = new stdClass;
$course->title              = "Corso Codemaster";
$course->message            = "Benvenuti al corso PHP di CodeMaster!";
$course->students           = getStudents();
$course->numberOfStudents   = count($course->students);

//$contact = new stdClass();
//$contact->name = "Mario";
//$contact->lastname = "Rossi";
//$contact->email = "..";
//
//$call = new stdClass();
//$call->date = date("d.M.Y", time());
//$call->result = "Ok";

$coffeeCost = getCoffeeCost($course->numberOfStudents);

// Includo il layout richiesto
$layoutFile = getLayoutFile();
include $layoutFile;