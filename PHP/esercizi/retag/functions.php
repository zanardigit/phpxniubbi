<?php

/**
 * Calcola l'ora di inizio delle lezioni in un range casuale tra le 9 e le 9:30
 *
 * @return string
 */
function calcolaOraDiInizioCasuale() {
    $fora = "9";
    $fminuti = rand(0,30);
    if($fminuti < 10) {
        $fminuti = "0" . $fminuti;
    }
    $foraInizio = $fora . ":" . $fminuti;

    return $foraInizio;
}

/**
 * Ottiene la data corrente estraendo solo il numero e il nome esteso del mese
 *
 * @return string
 */
function ottieniDataCorrente()
{
    $fDataCorrente = date("d F");

    return $fDataCorrente;
}