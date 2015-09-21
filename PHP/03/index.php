<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * Concatenazione di stringhe
 */

// Definisco una variabile stringa
$message = "Benvenuti al corso!";

// Definisco una costante
define("TITLE", "Questo è il corso Codemaster di TAG");

// Creo la stringa completa e la stampo a video
$fullString = $message . "<br>" . TITLE;
echo $fullString;

// Stampo un tag HTML
echo "<br>";

// Stessa cosa ma senza creare una variabile di passaggio
echo $fullString = $message . "<br>" . TITLE;