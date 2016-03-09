<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
        <nav>
            <a href="index.php?page=home">Home</a>
            <a href="index.php?page=students">Students</a>
        </nav>
        <h1><?= $message ?></h1>
        <h2>Elenco degli studenti</h2>
        <ul>
            <?php foreach ($students as $studentCode => $studentName): ?>
                <li>
                    <strong style="color: red">
                        <?= $studentCode ?>
                    </strong>
                    <?= $studentName ?>
                </li>
            <?php endforeach ?>
        </ul>
    </body>
</html>