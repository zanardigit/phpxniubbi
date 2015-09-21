<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 04. Tipi di variabili
 */

// Definisco una variabile stringa
$message = "Benvenuti al corso!";

// Definisco una costante
define("TITLE", "Questo è il corso Codemaster di TAG");

// Stampo a video la stringa di benvenuto
echo $message . "<br>" . TITLE . "<hr>";

// Definisco una variabile numerica
$numberOfStudents = 4;

// Stampo a video una stringa informativa (notare la conversione automatica della variabile)
echo "Numero di studenti: " . $numberOfStudents;

// Definisco una variabile booleana
$isCodeMaster = true;

// Definisco una variabile nulla
$result = null;