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
    $fileHandle = fopen(__DIR__ . '/students.csv', 'r');
    if (empty($fileHandle)) {
        return [];
    }

    $students = [];
    while ($data = fgetcsv($fileHandle)) {

        $nome = $data[0];
        $password = $data[1];
        $codice = $data[2];

        $students[$codice] = array(
            'nome' => $nome,
            'password' => $password,
            'codice' => $codice
        );
    }

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

/**
 * Restituisce il percorso completo del file da includere in base alla pagina
 * richiesta. Se tale file non esiste, restituisce il file di default (home).
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