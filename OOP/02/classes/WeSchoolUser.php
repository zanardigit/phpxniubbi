<?php
// File: classes/WeSchoolUser.php
require_once __DIR__ . '/Person.php';

abstract class WeSchoolUser extends Person {
    public $accountName;

    public function login() {
        // fai qualcosa
    }
}