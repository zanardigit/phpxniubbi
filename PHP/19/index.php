<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 19. Switch e variabili globali
 * @version 2015-11-09
 */

require_once __DIR__ . '/functions.php';

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);
$page = isset($_GET['page']) ? $_GET['page'] : null;

switch ($page) {
    case 'students':
        include __DIR__ . '/layouts/students.php';
        break;

    case 'home':
    default:
        include __DIR__ . '/layouts/home.php';
}
