<?php

require_once __DIR__ . '/functions.php';

session_start();

if (isValidLogin()) {
    $_SESSION['is_authenticated'] = true;
}

if (empty($_SESSION['is_authenticated'])) {
    include __DIR__  . '/login.php';
    exit;
}

include __DIR__ . "/home.php";
