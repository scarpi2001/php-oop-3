<?php

class Employee extends Person
{

    private Wage $wage;
    private $hireDate;
    private $level;

    public function __construct($name, $surname, $birthDate, $birthPlace, $fc, Wage $wage, $hireDate, $level)
    {
        parent::__construct($name, $surname, $birthDate, $birthPlace, $fc);
        $this->setWage($wage);
        $this->setHireDate($hireDate);
        $this->setLevel($level);
    }

    public function setWage(Wage $wage)
    {
        $this->wage = $wage;
    }

    public function getWage()
    {
        return $this->wage;
    }

    public function setHireDate($hireDate)
    {
        $this->hireDate = $hireDate;
    }

    public function getHireDate()
    {
        return $this->hireDate;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getAnnual()
    {
        return $this->wage->getAnnual();
    }
    public function getHtml()
    {
        return parent::getHtml()
            . "<h1> <ul> <li> Stipendio(RAL): €" . $this->getAnnual() . "</li>"
            . $this->getWage()->getHtml() . "</ul> </h1>"
            . "<h2> data di assunzione: " . $this->getHireDate() . "</h2>"
            . "<h2> livello: " . $this->getLevel() . "</h2>";

    }

}