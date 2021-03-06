<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 07. doctrine DBAL (Configurazione via URL)
 * @version 2015-11-19
 */

// Carica le classi di base
require __DIR__ . '/vendor/autoload.php';

// Configurazione
$dbType = 'mysql';
$dbHost = 'localhost';
$dbUser = 'codemaster';
$dbPass = 'tag';
$dbName = 'codemaster';

// Connessione tramite array di parametri
$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'url' => "$dbType://$dbUser:$dbPass@$dbHost/$dbName",
);
$connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
if ($connection == false) {
    exit("Impossibile connettersi al database");
}