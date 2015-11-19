<?php
// File: autoloader.php

function autoload($class) {
    $file = __DIR__ . "/classes/$class.php";
    if ( ! file_exists($file)) {
        return false;
    }

    require_once $file;

    return true;
}

spl_autoload_register("autoload");