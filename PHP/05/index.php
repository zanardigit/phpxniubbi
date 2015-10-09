<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 05. Array
 * @version 2015-10-09
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

// Definisco un array (1: MODO TRADIZIONALE)
$students = array(
    "Francesco",
    "Matteo",
    "Marco",
    "Patrizia"
);

// Definisco un array (2: MODO TRADIZIONALE SU UNA SOLA RIGA)
$students = array("Francesco", "Matteo", "Marco", "Patrizia");

// Definisco un array (3: NUOVO MODO DA PHP 5.4)
$students = ["Francesco", "Matteo", "Marco", "Patrizia"];

// Definisco un array (4. PARTO DA UN ARRAY VUOTO E LO RIEMPIO)
$students = array();
$students = [];

// Aggiungo elementi all"array con l"operatore di aggiunta
$students []= "Francesco";
$students []= "Matteo";
$students []= "Marco";
$students []= "Patrizia";
$students []= "Enrico";

// Stampo l"array intero in un colpo solo con il comando print_r
echo "<h1>Elenco degli studenti</h1>";
print_r($students);
