<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 03. Concatenazione di stringhe
 * @version 2015-11-09
 */

// Definisco una variabile stringa
$message = "Benvenuti al corso!";

// Definisco una nuova variabile
$title = "Questo è il corso PHP di CodeMaster";

// MODO 1: stampo i vari pezzi uno per uno
echo $message;
echo "<br>";
echo $title;

// Separatore
echo "<hr>";

// MODO 2: stessa cosa ma uso la concatenazione
echo $message . "<br>" . $title;

// Separatore
echo "<hr>";

// MODO 3: creo una nuova variabile che contiene la stringa completa
$fullString = $message . "<br>" . $title;
echo $fullString;
