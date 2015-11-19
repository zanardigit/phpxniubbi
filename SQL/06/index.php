<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 06. doctrine DBAL (configurazione via array)
 * @version 2015-11-19
 * @todo    riprovare e completare dopo "composer update"
 */

// Carica le classi di base
use Doctrine\Common\ClassLoader;
require __DIR__ . '/../vendor/doctrine/lib/Doctrine/Common/ClassLoader.php';
$classLoader = new ClassLoader('Doctrine', __DIR__ . '/../vendor/doctrine');
$classLoader->register();

// Configurazione
$dbType = 'pdo_mysql';
$dbHost = 'localhost';
$dbUser = 'codemaster';
$dbPass = 'tag';
$dbName = 'codemaster';

// Connessione tramite array di parametri
$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'host' => 'localhost',
    'user' => 'codemaster',
    'password' => 'tag',
    'dbname' => 'codemaster',
    'driver' => 'pdo_mysql',
);
$connection = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
if ($connection == false) {
    exit("Impossibile connettersi al database");
}