<?php

require_once __DIR__ . "/functions.php";

$url = "http://codemaster.local/PHP/21/index.php?page=home";

$protocollo = getProtocollo($url);
$nomehost = getNomehost($url);
$percorso = getPercorso($url);
$querystring = getQuerystring($url);

include __DIR__ . "/layout.php";
