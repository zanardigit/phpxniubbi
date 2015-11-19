<?php
// File: index.php
header('Content-Type: text/html; charset=utf-8');

/**
 * 02. mysqli
 * @version 2015-11-19
 */

// Configurazione
$dbHost = 'localhost';
$dbUser = 'codemaster';
$dbPass = 'tag';
$dbName = 'codemaster';

// Connessione al database server
$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if ($connection == false) {
    exit("Impossibile connettersi al database");
}

// Esecuzione della query
$sql = 'SELECT * FROM studenti';
$result = mysqli_query($connection, $sql);
if ($result == false) {
    exit("Impossibile effettuare la query");
}

// Visualizzazione dei risultati
echo "<h1>Contacts</h1>";
while ($contact = mysqli_fetch_object($result)) {
    echo "<pre>";
    var_dump($contact);
    echo "</pre>";
}
