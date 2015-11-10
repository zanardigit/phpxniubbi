<?php

class Course
{
    /**
     * Titolo del corso
     *
     * @var string
     */
    public $title;

    /**
     * Messaggio di benvenuto
     *
     * @var string
     */
    public $message;

    /**
     * Elenco degli studenti
     *
     * @var array
     */
    public $students;

    /**
     * Restituisce il conteggio totale degli studenti
     *
     * @return int
     */
    public function getNumberOfStudents()
    {
        return count($this->students);
    }
}