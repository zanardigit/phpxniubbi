<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 07. doctrine DBAL (configurazione via URL)
 * @version 2015-11-19
 * @todo    riprovare e completare dopo "composer update"
 */

// Carica le classi di base
use Doctrine\Common\ClassLoader;
require __DIR__ . '/../vendor/doctrine/lib/Doctrine/Common/ClassLoader.php';
$classLoader = new ClassLoader('Doctrine', __DIR__ . '/../vendor/doctrine');
$classLoader->register();

// Configurazione
$dbType = 'mysql';
$dbHost = 'localhost';
$dbUser = 'codemaster';
$dbPass = 'tag';
$dbName = 'codemaster';

// Connessione tramite array di parametri
$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'url' => "$dbType:$dbUser:$dbPass@$dbHost/$dbName",
);
$connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
if ($connection == false) {
    exit("Impossibile connettersi al database");
}