<?php
// File index.php

/**
 * 01. Esempi di classi con inheritance
 * @version 2015-11-19
 */

class Person {
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $email;
}

class WeSchoolUser extends Person {
    public $accountName;

    public function login() {
        // fai qualcosa
    }
}

class Teacher extends WeSchoolUser {
    public $topic;

    public function login() {
        // fai qualcos'altro
    }
}

class Student extends WeSchoolUser {
    public $schoolId;
}
