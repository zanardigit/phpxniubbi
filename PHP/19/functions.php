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
 *
 */
function getFileName()
{
    //$requestedPage = $_GET['page'];

    $requestedPage = filter_input(INPUT_GET, 'page');
    // results

    $fileName = __DIR__ . "/$requestedPage.php";
    // /var/www/tag-codemaster/results.php

    if (file_exists($fileName)) {
        return $fileName;
    }
    else {
        return __DIR__ . "/home.php";
    }

}