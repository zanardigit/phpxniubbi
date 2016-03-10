<?php
// File index.php

/**
 * 01. Esempi di classi con inheritance
 * @version 2016-03-10
 */

/**
 * Person
 */
class Person {
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $email;
}

/**
 * WeSchoolUser
 */
class WeSchoolUser extends Person {
    public $accountName;

    public function login() {
        // fai qualcosa
    }
}

/**
 * Teacher
 */
class Teacher extends WeSchoolUser {
    public $topic;

    public function login() {
        // fai qualcos'altro
    }
}

/**
 * Student
 */
class Student extends WeSchoolUser {
    public $schoolId;
}
