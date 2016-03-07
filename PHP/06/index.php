<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 06. Altre funzioni per gli array
 * @version 2016-03-07
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

// Definisco un array
$students = ['Francesco', 'Matteo', 'Marco', 'Patrizia'];

// Stampo l'array intero in un colpo solo con il comando print_r
echo "<h1>Elenco degli studenti</h1>";
print_r($students);

// Separatore
echo "<hr>";

// Stampo il primo elemento - si parte da 0
echo "<h1>Primo elemento: " . $students[0] . "</h1>";

// Separatore
echo "<hr>";

// Stampo il terzo elemento
echo "Terzo elemento: " . $students[2];

// Separatore
echo "<hr>";

// Stampo il quarto elemento con interpolazione
echo "Quarto elemento: $students[3]<br>";

// Li stampo tutti, uno per uno, aggiungendo una barra di separazione
echo "<h1>Elenco definitivo degli studenti</h1>";
echo $students[0]
    . " / "
    . $students[1]
    . " / "
    . $students[2]
    . " / "
    . $students[3];

echo "<br>";

// La stessa cosa ma con interpolazione
echo "$students[0] / $students[1] / $students[2] / $students[3]";

// Separatore
echo "<hr>";

// Array su più livelli
$informazioni = array(
    "PHP",
    "Milano",
    array(
        "Francesco",
        "Sergio",
        "Simona",
        "Matteo",
        array(
            'x',
            'y',
            'z'
        )
    ),
    array(
        'a',
        'b',
        'c'
    )

);

// Accedo a un elemento interno
echo "<hr>";
echo $informazioni[2][0]; // "Francesco"
echo $informazioni[3][0]; // "a"
echo $informazioni[2][4][0]; // "x"
