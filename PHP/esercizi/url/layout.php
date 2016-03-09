<html>
    <head>
        <meta name="charset" content="utf-8">
        <title>Analisi di un URL</title>
    </head>
    <body>
        <h1>Analisi di un URL</h1>
        <p>I componenti dell'URL attuale sono:</p>
        <ul>
            <li>Protocollo: <?= $protocollo ?></li>
            <li>Nome host: <?= $nomehost ?></li>
            <li>Percorso: <?= $percorso ?></li>
            <li>Query string: <?= $querystring ?></li>
        </ul>
    </body>
</html>