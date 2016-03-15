<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 28. Uso di classi
 * @version 2016-03-10
 */

define("LAYOUTS_DIR", __DIR__ . "/layouts");
define("DEFAULT_LAYOUT", LAYOUTS_DIR . "/home.php");

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/classes/CourseClass.php';
require_once __DIR__ . '/classes/StudentClass.php';

//$object1 = new stdClass;
//$object2 = new CourseClass;
//
//$corsoHtml = new CourseClass;
//$corsoHtml->title = "Corso di HTML";
//$corsoHtml->students = getStudents('html');
//
//$corsoPhp = new CourseClass;
//$corsoPhp->title = "Corso di PHP";
//$corsoPhp->students = getStudents('php');
//
//print_r($corsoHtml);
//print_r($corsoPhp);
//exit;

$codemaster = new CourseClass;
$codemaster->title = "Corso Codemaster";
$codemaster->message = "Benvenuti al corso PHP di CodeMaster!";
$codemaster->students = getStudents();

$coffeeCost = getCoffeeCost($codemaster->getNumberOfStudents());

// Includo il layout richiesto
$layoutFile = getLayoutFilePath();
include $layoutFile;
