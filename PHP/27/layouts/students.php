<html>
    <head>
        <meta charset="utf-8">
        <title><?= $course->title ?></title>
    </head>
    <body>
        <nav>
            <a href="index.php?page=home">Home</a>
            <a href="index.php?page=students">Students</a>
            <a href="index.php?page=summary">Summary</a>
            <a href="index.php?page=results">Results</a>
        </nav>
        <h1><?= $course->message ?></h1>
        <h2>Elenco degli studenti</h2>
        <ul>
           <?php foreach ($course->students as $student): ?>
                <li>
                    <strong style="color: red">
                        <?= $student['codice']?>
                    </strong>
                    <?= $student['nome'] ?> (<?= $student['ruolo'] ?>)
                </li>
            <?php endforeach ?>
        </ul>
        <h2>Aggiungi studente</h2>
        <div>
            <form action="index.php" method="post">
                <label for="name">Nome:</label>
                <br>
                <input id="name" name="name" type="text">
                <br>
                <label for="role">Ruolo:</label>
                <br>
                <input id="role" name="role" type="text">
                <br>
                <input id="addstudent" name="addstudent" type="hidden" value="1">
                <br>
                <input type="submit">
                </ul>
            </form>
        </div>
    </body>
</html>