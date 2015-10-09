<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 17. Switch e variabili globali
 */

require_once __DIR__ . '/functions.php';

$title = "Corso Codemaster";
$message = "Benvenuti al corso PHP di CodeMaster!";
$students = getStudents();
$numberOfStudents = count($students);
$coffeeCost = getCoffeeCost($numberOfStudents);
$_GET['page'] = isset($_GET['page']) ? $_GET['page'] : null;

// Recupero automaticamente un parametro richiesto nell'indirizzo
switch ($_GET['page']) {
    case 'students':
        include __DIR__ . '/students.php';
        break;

    case 'home':
    default:
        include __DIR__ . '/home.php';
}
