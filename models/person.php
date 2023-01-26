<?php

class Person
{

    private $name;
    private $surname;
    private $birthDate;
    private $birthPlace;
    private $fiscCode;

    public function __construct($name, $surname, $birthDate, $birthPlace, $fiscCode)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setBirthDate($birthDate);
        $this->setBirthPlace($birthPlace);
        $this->setName($fiscCode);

    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }

    public function setFiscCode($fiscCode)
    {
        $this->fiscCode = $fiscCode;
    }

}