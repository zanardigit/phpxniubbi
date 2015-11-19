<?php
// File: index.php
header('Content-Type: text/html; charset=utf-8');

/**
 * 04. assegnazione di una classe specifica
 * @version 2015-11-19
 */

require_once __DIR__ . '/classes/Contact.php';

// Configurazione
$dbHost = 'localhost';
$dbUser = 'codemaster';
$dbPass = 'tag';
$dbName = 'codemaster';

// Creazione di un nuovo oggetto che rappresenta il db
$db = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($db == false) {
    exit("Impossibile connettersi al database");
}

// Esecuzione della query
$sql = 'SELECT * FROM studenti';
$result = $db->query($sql);
if ($result == false) {
    exit("Impossibile effettuare la query");
}

// Visualizzazione dei risultati
echo "<h1>Contacts</h1>";
while ($contact = $result->fetch_object('Contact')) {
    echo "<pre>";
    var_dump($contact);
    echo "</pre>";
}