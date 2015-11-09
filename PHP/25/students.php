<html>
    <head>
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $message ?></h1>
        <h2>Elenco degli studenti</h2>
        <ul>
            <?php foreach ($students as $student): ?>
                <li><strong><?= $student->name ?></strong> (<?= $student->role ?>)</li>
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