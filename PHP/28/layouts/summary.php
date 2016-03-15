<html>
    <head>
        <meta charset="utf-8">
        <title><?= $codemaster->title ?></title>
    </head>
    <body>
        <nav>
            <a href="index.php?page=home">Home</a>
            <a href="index.php?page=students">Students</a>
            <a href="index.php?page=summary">Summary</a>
            <a href="index.php?page=results">Results</a>
        </nav>
        <h1><?= $codemaster->message ?></h1>
        <p>Il numero degli studenti è <?= $codemaster->getNumberOfStudents() ?></p>
        <p>Il costo totale del caffè è <?= $coffeeCost ?></p>
    </body>
</html>