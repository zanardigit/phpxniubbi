<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 02. Variabili e costanti
 */

// Definisco una variabile
$message = "Benvenuti al corso!";

// Definisco una costante
define("TITLE", "Questo è il corso Codemaster di TAG");

// Stampo a video il valore della variabile
echo $message;

// Stampo a video un tag HTML
echo "<br>";

// Stampo a video il valore della costante
echo TITLE;

// Stampo a video un tag HTML
echo "<br>";

// Stessa cosa (stampo a video il valore della costante) ma con un diverso comando
echo constant("TITLE");