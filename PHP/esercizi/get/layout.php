<html>
    <head>
        <meta name="charset" content="utf-8">
        <title>Richiesta pagina</title>
    </head>
    <body>
        <h1>Richiedi la pagina desiderata</h1>
        <form action="index.php" method="get">
            <p>
                <label for="page">Pagina:</label>
                <select id="page" name="page">
                    <option value="home">home</option>
                    <option value="students">students</option>
                </select>
            </p>
            <p>
                <label for="language">Linguaggio:</label>
                <input type="text" name="language">
            </p>
            <input type="submit" value="Invia">
        </form>
    </body>
</html>