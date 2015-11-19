<?php
// File: index.php

/**
 * 02. Utilizzo di classi
 * @version 2015-11-19
 */

require_once __DIR__ . '/classes/Teacher.php';
require_once __DIR__ . '/classes/Student.php';
require_once __DIR__ . '/classes/Course.php';

$franz = new Teacher;
$franz->accountName = "francesco";
$franz->login();

$php = new Course;
$php->title = "PHP";
$php->description = "Introduzione al linguaggio di programmazione";
$php->teacher = $franz;