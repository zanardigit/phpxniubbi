<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 06. doctrine DBAL (configurazione via array)
 * @version 2015-11-19
 * @todo    riprovare e completare dopo "composer update"
 */

// Carica le classi di base
require __DIR__ . '/vendor/autoload.php';

// Configurazione
$dbType = 'pdo_mysql';
$dbHost = 'localhost';
$dbUser = 'codemaster';
$dbPass = 'tag';
$dbName = 'codemaster';

// Connessione tramite array di parametri
$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'host' => $dbHost,
    'user' => $dbUser,
    'password' => $dbPass,
    'dbname' => $dbName,
    'driver' => $dbType,
);
$connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
if ($connection == false) {
    exit("Impossibile connettersi al database");
}