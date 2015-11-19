<?php
// File: index.php
header('Content-Type: text/html; charset=utf-8');

/**
 * 05. pdo
 * @version 2015-11-19
 */

// Configurazione
$dbType = 'mysql';
$dbHost = 'localhost';
$dbUser = 'codemaster';
$dbPass = 'tag';
$dbName = 'codemaster';

// Connessione al database con PDO
$db = new PDO("$dbType:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
if (empty($db)) {
    exit("Impossibile connettersi al database");
}

// Esecuzione della query
$sql = 'SELECT * FROM contatti';
$result = $db->query($sql);
if ($result == false) {
    exit("Impossibile effettuare la query");
}

// Visualizzazione dei risultati
echo "<h1>Contacts</h1>";
while ($contact = $result->fetchObject()) {
    echo "<pre>";
    var_dump($contact);
    echo "</pre>";
}

// Con definizione della classe:
//while ($contact = $result->fetchObject('Contact')) { ...
