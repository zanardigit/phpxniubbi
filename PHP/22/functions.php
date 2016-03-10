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
 * richiesta. Se non è stata richiesta alcuna pagina, o se il relativo file non
 * esiste, restituisce il file di default (home).
 *
 * @return string
 */
function getLayoutFilePath()
{
    $requestedPage = filter_input(INPUT_GET, 'page');
    if (empty($requestedPage)) {
        return __DIR__ . "/layouts/home.php";
    }

    $layoutFile = __DIR__ . "/layouts/$requestedPage.php";
    if ( ! file_exists($layoutFile)) {
        return __DIR__ . "/layouts/home.php";
    }

    return $layoutFile;
}
