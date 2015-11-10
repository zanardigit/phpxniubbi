<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 05. Array
 * @version 2015-11-09
 */

// Definisco le variabili di tipo stringa
$message = "Benvenuti al corso!";
$title = "Questo è il corso PHP di CodeMaster";

// Stampo a video la stringa di benvenuto
echo $message . "<br>" . $title . "<hr>";

// Definisco una variabile numerica
$numberOfStudents = 4;

// Stampo a video una stringa informativa (notare la conversione automatica della variabile)
echo "Numero di studenti: " . $numberOfStudents;

// MODO 1: definisco un array (modo tradizionale)
$students = array(
    "Francesco",
    "Matteo",
    "Marco",
    "Patrizia"
);

// MODO 2: definisco un array (modo tradizionale su una sola riga)
$students = array("Francesco", "Matteo", "Marco", "Patrizia");

// MODO 3: definisco un array (nuovo modo da PHP 5.4)
$students = ["Francesco", "Matteo", "Marco", "Patrizia"];

// MODO 4: definisco un array (parto da un array vuoto e lo riempio)
$students = array();
$students []= "Francesco"; // Operatore di aggiunta elementi
$students []= "Matteo";
$students []= "Marco";
$students []= "Patrizia";
$students []= "Enrico";

// Stampo l"array intero in un colpo solo con il comando print_r
echo "<h1>Elenco degli studenti</h1>";
print_r($students);
