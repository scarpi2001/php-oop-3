<?php

class Person
{

    private $name;
    private $surname;
    private $birthDate;
    private $birthPlace;
    private $fc;

    public function __construct($name, $surname, $birthDate, $birthPlace, $fc)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setBirthDate($birthDate);
        $this->setBirthPlace($birthPlace);
        $this->setFc($fc);

    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }

    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    public function setFc($fc)
    {
        $this->fc = $fc;
    }

    public function getFc()
    {
        return $this->fc;
    }

    public function getHtml()
    {
        return "<h1> nome: " . $this->getName() . "</h1>"
            . "<h1> cognome: " . $this->getSurname() . "</h1>"
            . "<h2> data di nascita: " . $this->getBirthDate() . "</h2>"
            . "<h2> luogo di nascita: " . $this->getBirthPlace() . "</h2>"
            . "<h2> codice fiscale: " . $this->getFc() . "</h2>";
    }

}