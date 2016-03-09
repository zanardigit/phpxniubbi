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
