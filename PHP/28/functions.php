<?php

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
        $student = new Student();
        $student->name = $data[0];
        $student->role = $data[1];
        $students[] = $student;
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

/**
 * Verifica ed eventualmente aggiunge un nuovo studente
 */
function addStudent()
{
    $addstudent = filter_input(INPUT_POST, 'addstudent');
    if ($addstudent != 1) {
        return false;
    }

    $fileHandle = fopen(__DIR__ . '/students.csv', 'a');
    if (empty($fileHandle)) {
        return false;
    }

    $fields = array(
        filter_input(INPUT_POST, 'name'),
        filter_input(INPUT_POST, 'role'),
    );

    $result = fputcsv($fileHandle, $fields);

    if ($result === false) {
        return false;
    }
    else {
        return true;
    }

    // O più semplicemente
    return boolvar($result);
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