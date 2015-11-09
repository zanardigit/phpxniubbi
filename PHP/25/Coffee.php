<?php

class Coffee
{

    /**
     * Costo unitario del caffè
     *
     * @var float $costPerUnit;
     */
    public $costPerUnit = 1;

    /**
     * Calcola il costo totale del caffè in base al numero di studenti e al costo
     * del singolo caffè
     *
     * @param   int $numberOfStudents
     * @return  int
     */
    public function getCost($numberOfStudents)
    {
        $totalCost = $this->costPerUnit * $numberOfStudents;

        return $totalCost;
    }
}
