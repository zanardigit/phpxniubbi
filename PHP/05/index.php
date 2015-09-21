<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 05. Array
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

// Definisco un array (1: MODO TRADIZIONALE)
$students = array(
    'Francesco',
    'Matteo',
    'Marco',
    'Patrizia'
);

// Definisco un array (2: MODO TRADIZIONALE SU UNA SOLA RIGA)
$students = array('Francesco', 'Matteo', 'Marco', 'Patrizia');

// Definisco un array (3: NUOVO MODO DA PHP 5.4)
$students = ['Francesco', 'Matteo', 'Marco', 'Patrizia'];

// Definisco un array vuoto in entrambi i modi
$students = array();
$students = [];

// Aggiungo elementi all'array con l'operatore di aggiunta
$students []= 'Francesco';
$students []= 'Matteo';
$students []= 'Marco';
$students []= 'Patrizia';

// Stampo l'array intero in un colpo solo con il comando print_r
echo "<h1>Elenco degli studenti</h1>";
print_r($students);