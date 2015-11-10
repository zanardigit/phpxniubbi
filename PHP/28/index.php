<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 26. Uso delle classi
 * @version 2015-11-10
 */

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/Coffee.php';
require_once __DIR__ . '/Course.php';
require_once __DIR__ . '/Student.php';

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
