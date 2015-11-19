<?php
// File: index.php
header('Content-Type: text/html; charset=utf-8');

/**
 * 01. Estensione mysql (DEPRECATA)
 * @version 2015-11-19
 */

// Configurazione
$dbHost = 'localhost';
$dbUser = 'codemaster';
$dbPass = 'tag';
$dbName = 'codemaster';

// Connessione al database server
$connection = mysql_connect($dbHost, $dbUser, $dbPass);
if ($connection == false) {
    exit("Impossibile connettersi al database");
}

// Selezione del database
$dbSelected = mysql_select_db($dbName);
if ($dbSelected == false) {
    exit("Impossibile selezionare il database ");
}

// Esecuzione della query
$sql = 'SELECT * FROM studenti';
$result = mysql_query($sql);
if ($result == false) {
    exit("Impossibile effettuare la query");
}

// Visualizzazione dei risultati
echo "<h1>Contacts</h1>";
while ($contact = mysql_fetch_object($result)) {
    echo "<pre>";
    var_dump($contact);
    echo "</pre>";
}
