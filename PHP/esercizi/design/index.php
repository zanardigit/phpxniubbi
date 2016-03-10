<?php

require_once __DIR__ . '/functions.php';

$oraInizio = calcolaOraDiInizioCasuale();
$dataCorrente = ottieniDataCorrente();

include __DIR__ . '/lista.php';