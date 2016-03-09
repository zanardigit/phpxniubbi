<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 04. Tipi di variabili
 * @version 2016-03-08
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

// Incremento una variabile numerica
// Modo 1: versione estesa
$numberOfStudents = $numberOfStudents + 1;
// Modo 2: stessa cosa utilizzando la notazione abbreviata
$numberOfStudents += 1;
// Modo 3: stessa cosa utilizzando l'operatore di incremento singolo
$numberOfStudents ++;

// Definisco una variabile booleana
$isCodeMaster = true;

// Definisco una variabile nulla
$result = null;
