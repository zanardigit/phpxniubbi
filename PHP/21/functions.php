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
    $fileHandle = fopen(__DIR__ . '/students.csv', 'r');
    if (empty($fileHandle)) {
        return array();
    }

    $students = array();
    while ($data = fgetcsv($fileHandle)) {
        if ($data === false) {
            break;
        }
        $name = $data[0];
        $role = $data[1];
        $students[$name] = $role;
    }
    fclose($fileHandle);

    return $students;
}

/**
 * Imposta i cookies necessari
 *
 * @return void
 */
function setCookies()
{
    if (empty(filter_input(INPUT_COOKIE, 'id_visita'))) {
        setcookie('id_visita', rand(100, 999));
    }
    if (empty(filter_input(INPUT_COOKIE, 'id_visitatore'))) {
        setcookie('id_visitatore', rand(100, 999), time() + 60 * 60 * 24);
    }
}
