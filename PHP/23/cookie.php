<?php
header('Content-Type: text/html; charset=utf-8');

echo "ID visita: " . filter_input(INPUT_COOKIE, 'id_visita');
echo "<br>";
echo "ID visitatore: " . filter_input(INPUT_COOKIE, 'id_visitatore');


if ($_COOKIE['facebookUsername']) {
    authenticateUser($_COOKIE['facebookUsername']);
}

function authenticateUser($username) {
    getUserData($username);
    executeLogin($username);
    session_start();
}