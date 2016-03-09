<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 11. Blocco if, conteggio di un array, foreach
 * @version 2016-03-08
 */

// Assegnazione
$timeOfTheDay = date("H", time());

// Controllo
if ($timeOfTheDay >= 16) {
    $greeting = "Buona sera!";
}
else {
    $greeting = "Buon giorno!";
}

$message = "Benvenuti al corso PHP di CodeMaster!";
$students = ['Francesco', 'Matteo', 'Marco', 'Patrizia', 'Enrico'];

// Conteggio di un array
$numberOfStudents = count($students);
?>
<html>
    <head>
        <title><?= $title ?></title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1><?= $message ?></h1>
        <p><?= $greeting ?>
        <p>Il numero degli studenti è <?= $numberOfStudents ?></p>
        <h2>Elenco degli studenti</h2>
        <ul>
            <!-- Metodo standard -->
            <?php
            foreach ($students as $student) {
                echo "<li>" . $student . "</li>";
            }
            ?>
            <hr>

            <!-- Prima modifica: apro e chiudo PHP su ogni riga -->
            <?php foreach ($students as $student) { ?>
                <?php echo "<li>" . $student . "</li>"; ?>
            <?php } ?>
            <hr>

            <!-- Seconda modifica: uso sintassi ECHO abbreviata -->
            <?php foreach ($students as $student) { ?>
                <?= "<li>" . $student . "</li>" ?>
            <?php } ?>
            <hr>

            <!-- Terza modifica: porto fuori i tag HTML -->
            <?php foreach ($students as $student) { ?>
                <li><?= $student ?></li>
            <?php } ?>
            <hr>

            <!-- Versione finale: modifico apertura e chiusura del ciclo -->
            <?php foreach ($students as $student): ?>
                <li><?= $student ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>