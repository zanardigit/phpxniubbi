<html>
    <?php include __DIR__ . '/_head.php' ?>
    <body>
        <?php include __DIR__ . '/_nav.php' ?>
        <h1><?= $message ?></h1>
        <h2>Elenco degli studenti</h2>
        <ul>
            <?php foreach ($students as $student): ?>
                <li>
                    <strong style="color: red">
                        <?= $student['codice'] ?>
                    </strong>
                    <?= $student['nome'] ?> (<?= $student['ruolo'] ?>)
                </li>
            <?php endforeach ?>
        </ul>
        <h2>Aggiungi studente</h2>
        <div>
            <form action="index.php?page=students" method="post">
                <label for="name">Nome:</label>
                <br>
                <input id="name" name="name" type="text">
                <br>
                <label for="code">Codice:</label>
                <br>
                <input id="code" name="code" type="text">
                <br>
                <label for="password">Password:</label>
                <br>
                <input id="password" name="password" type="text">
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