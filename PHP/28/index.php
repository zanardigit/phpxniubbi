<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 28. Uso delle classi e filter_input
 * @version 2016-03-07
 */

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/classes/Coffee.php';
require_once __DIR__ . '/classes/Course.php';
require_once __DIR__ . '/classes/Student.php';

$course = new Course();

$url = filter_input(INPUT_SERVER, 'http_host');
if ($url == "http://codemaster.local") {
    $course->title = "Corso Codemaster";
}
else {
    $course->title = "Ignoto";
}

$course->message = "Benvenuti al corso PHP di CodeMaster!";
$result = addStudent();
if ($result == true) {
    $course->message = "Nuovo studente aggiunto";
}

$course->students = getStudents();
$coffee = new Coffee();
$coffeeCost = $coffee->getCost($course->getNumberOfStudents());
setCookies();

// Includo il layout richiesto
$layoutFile = getLayoutFile();
include $layoutFile;
