<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
        <nav>
            <a href="index.php?page=home">Home</a>
            <a href="index.php?page=students">Students</a>
            <a href="index.php?page=summary">Summary</a>
            <a href="index.php?page=results">Results</a>
        </nav>
        <h1><?= $message ?></h1>
        <h2>Elenco degli studenti</h2>
        <ul>
            <?php foreach ($students as $student): ?>
                <li>
                    <strong style="color: red">
                        <?= $student['codice']?>
                    </strong>
                    <?= $student['nome']?>
                </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>