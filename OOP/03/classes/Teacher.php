<?php
// File: classes/Teacher.php

class Teacher extends WeSchoolUser implements User
{

    public $topic;
    protected $nickname;
    private $cellPhoneNumber;

    public function login()
    {
        $password = $this->getPassword();
        //systemLogin($password);
        echo "Insegnante acceduto correttamente";
    }

    private function getPassword()
    {
        $query = "SELECT password FROM teachers WHERE accountName = '" . $this->accountName . "'";

        // return password
    }

    public function takeVacation($date)
    {
        ;
    }

    public function logout()
    {
        ;
    }
}
