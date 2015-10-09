<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 04. Tipi di variabili
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

// Definisco una variabile booleana
$isCodeMaster = true;

// Definisco una variabile nulla
$result = null;
