<html>
    <head>
        <meta charset="utf-8">
        <title><?= $codemaster->title ?></title>
    </head>
    <body>
        <h1><?= $codemaster->message ?></h1>
        <h2>Scegli la pagina desiderata</h2>
        <form action="index.php" method="get">
            <p>
                <select name="page">
                    <option value="home">home</option>
                    <option value="students">students</option>
                    <option value="summary">summary</option>
                    <option value="results">results</option>
                </select>
            </p>
            <input type="submit" value="Invia">
        </form>
    </body>
</html>