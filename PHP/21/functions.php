<?php

/**
 * Calcola il costo totale del caffè in base al numero di studenti e al costo
 * del singolo caffè
 *
 * @param   int $numberOfStudents
 * @param   int $singleCoffeeCost default 1 se non specificato
 * @return  int
 */
function getCoffeeCost($numberOfStudents, $singleCoffeeCost = 1)
{
    $totalCost = $singleCoffeeCost * $numberOfStudents;

    return $totalCost;
}

/**
 * Ottiene l'elenco degli studenti
 *
 * @return array
 */
function getStudents()
{
    $students = array(
        'Francesco' => 'Programmatore',
        'Matteo' => 'Programmatore',
        'Marco' => 'Devops',
        'Patrizia' => 'Grafica'
    );

    return $students;
}

/**
 * Restituisce il percorso completo del file da includere in base alla pagina
 * richiesta. Se tale file non esiste, restituisce il file di default (home).
 *
 * @return string
 */
function getLayoutFile()
{
    // Usare "filter_input" è più sicuro che accedere direttamente alla
    // variabile globale
    $requestedPage = filter_input(INPUT_GET, 'page');

    $layoutFile = "$requestedPage.php";

    if (file_exists($layoutFile)) {
        return $layoutFile;
    } else {
        return "home.php";
    }
}
