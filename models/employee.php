<?php

class Employee extends Person
{

    private Wage $wage;
    private $hireDate;

    public function __construct($name, $surname, $birthDate, $birthPlace, $fiscCode, Wage $wage, $hireDate)
    {
        parent::__construct($name, $surname, $birthDate, $birthPlace, $fiscCode);
        $this->setWage($wage);
        $this->setHireDate($hireDate);
    }

    public function setWage(Wage $wage)
    {
        $this->wage = $wage;
    }

    public function setHireDate($hireDate)
    {
        $this->$hireDate = $hireDate;
    }

}