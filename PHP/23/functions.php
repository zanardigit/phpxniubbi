<?php

/**
 * Calcola il costo totale del caffè in base al numero di studenti e al costo
 * del singolo caffè
 *
 * @param   int $numberOfPeople Numero totale delle persone
 * @param   int $singleCoffeeCost Costo di ogni caffè, default 1 se non indicato
 * @return  int Costo totale risultante
 */
function getCoffeeCost($numberOfPeople, $singleCoffeeCost = 1)
{
    $totalCost = $numberOfPeople * $singleCoffeeCost;

    return $totalCost;
}

/**
 * Ottiene l'elenco degli studenti
 *
 * @return array
 */
function getStudents()
{
    $students = [
        "P001" => "Francesco",
        "P002" => "Matteo",
        "D001" => "Marco",
        "G001" => "Patrizia",
    ];

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

    $layoutFile = __DIR__ . "/layouts/$requestedPage.php";

    if (file_exists($layoutFile)) {
        return $layoutFile;
    } else {
        return __DIR__ . "/layouts/home.php";
    }
}