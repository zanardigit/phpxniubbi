<html>
    <head>
        <meta charset="utf-8">
        <title>La mia prima pagina web</title>
    </head>
    <body>
        <p>Oggi è il
            <?php
                echo date("d/M/Y", time());
            ?>
        </p>
        <h1>Titolo principale</h1>
        <p>Ciao a tutti</p>
        <ul>
            <li>Uno</li>
            <li>Due</li>
            <li>Tre</li>
        </ul>
    </body>
</html>