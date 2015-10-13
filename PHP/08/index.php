<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 08. completamento dell'HTML
 * @version 2015-10-13
 */

// Definisco le variabili di tipo stringa
$title = "Questo è il corso PHP di CodeMaster";
$message = "Benvenuti al corso!";

echo "<html>"
    . "<head>"
    . "<title>$title</title>"
    . "</head>"
    . "<body>";

// Stampo a video la stringa di benvenuto

echo "<h1>" . $message . "</h1>";

// Definisco una variabile numerica
$numberOfStudents = 4;

// Stampo a video una stringa informativa (notare la conversione automatica della variabile)
echo "<p>Il numero di studenti è: " . $numberOfStudents . "</p>";

// Definisco un array
$students = array('Francesco', 'Matteo', 'Marco', 'Patrizia');

// Stampo l'array intero in un colpo solo con il comando print_r
echo "<h2>Elenco degli studenti</h2>";
echo "<ul>";

foreach ($students as $student) {
    echo "<li>" . $student . "</li>";
}

echo "</ul>";
echo "</body>"
    . "</html>";