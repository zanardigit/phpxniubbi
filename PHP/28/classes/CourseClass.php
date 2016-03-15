<?php

class CourseClass
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
     * Ritorna il conteggio degli studenti
     */
    public function getNumberOfStudents()
    {
        $tempArray = $this->students;
        $numberOfStudents = count($tempArray);
        return $numberOfStudents;

        return count($this->students);
    }

}

