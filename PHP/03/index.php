<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 03. Concatenazione di stringhe
 * @version 2015-10-09
 */

// Definisco una variabile stringa
$message = "Benvenuti al corso!";

// Definisco una nuova variabile
$title = "Questo è il corso PHP di CodeMaster";

// Stampo i vari pezzi uno per uno
echo $message;
echo "<br>";
echo $title;

// Separatore
echo "<hr>";

// Stessa cosa ma uso la concatenazione
echo $message . "<br>" . $title;

// Separatore
echo "<hr>";

// Creo una nuova variabile che contiene la stringa completa
$fullString = $message . "<br>" . $title;
echo $fullString;
