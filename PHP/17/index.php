<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 17. Inclusione di file esterno
 * @version 2015-10-13
 */

// Inclusione di un file
require_once 'functions.php';

// Meglio ancora, specificando una costante di sistema che rappresenta la cartella corrente
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
