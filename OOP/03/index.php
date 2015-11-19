<?php
// File: index.php

/**
 * 03. Utilizzo di classi con autoloader
 * @version 2015-11-19
 */

require_once __DIR__ . '/autoloader.php';

$franz = new Teacher;
$franz->accountName = "francesco";
$franz->login();

$php = new Course;
$php->title = "PHP";
$php->description = "Introduzione al linguaggio di programmazione";
$php->teacher = $franz;