<?php

function getProtocollo($url) {
    $pezzetti = explode("://", $url);
    return $pezzetti[0];
}

function getNomehost($url) {
    $pezzetti = explode("://", $url);
    $urlSenzaProtocollo = $pezzetti[1];

    $altripezzetti = explode("/", $urlSenzaProtocollo);
    return $altripezzetti[0];
}

function getPercorso($url) {
    $protocollo = getProtocollo($url);
    $nomehost = getNomehost($url);

    $urlSenzaProtocolloENomeHost = str_replace("$protocollo://$nomehost", "", $url);

    $pezzetti = explode("?", $urlSenzaProtocolloENomeHost);
    return $pezzetti[0];
}

function getQuerystring($url) {
    return $url;
};