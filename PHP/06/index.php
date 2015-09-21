<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * Altre funzioni per gli array
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

// Definisco un array
$students = ['Francesco', 'Matteo', 'Marco', 'Patrizia'];

// Stampo l'array intero in un colpo solo con il comando print_r
echo "<h1>Elenco degli studenti</h1>";
print_r($students);

// Ottengo il primo elemento, rimuovendolo dall'array
$missingStudent = array_shift($students);

// Stampo il primo studente, poi quelli rimanenti
echo "<h1>Questo studente se n'è andato: $missingStudent </h1>";
echo "<h1>Elenco aggiornato degli studenti</h1>";
print_r($students);

// Reinserisco un elemento in testa all'array
$newStudent = "Enrico";
array_unshift($students, $newStudent);

// Stampo l'elenco attuale degli studenti
echo "<h1>Aggiunto utente in testa: $newStudent</h1>";
echo "<h1>Elenco aggiornato degli studenti</h1>";
print_r($students);

// Ottengo l'ultimo elemento, rimuovendolo dall'array
$anotherMissingStudent = array_pop($students);
echo "<h1>Anche questo studente se n'è andato: $anotherMissingStudent </h1>";

// Stampo l'elenco attuale degli studenti
echo "<h1>Quelli che rimangono</h1>";
print_r($students);

// Riaggiungo un elemento in coda
$anotherNewStudent = "Ilaria";
array_push($students, $anotherNewStudent);
//
// Stampo l'array intero in un colpo solo con il comando print_r
echo "<h1>Aggiunto utente in coda: $anotherNewStudent</h1>";
echo "<h1>Elenco definitivo degli studenti</h1>";
print_r($students);

// Posso anche stamparli uno per uno
echo "<h1>Elenco definitivo degli studenti</h1>";
echo $students[0] . "<br>";
echo $students[1] . "<br>";
echo $students[2] . "<br>";
echo $students[3] . "<br>";