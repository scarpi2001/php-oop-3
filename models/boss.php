<?php

class Boss extends Person
{

    private $dividend;
    private $bonus;

    public function __construct($name, $surname, $birthDate, $birthPlace, $fc, $dividend, $bonus)
    {
        parent::__construct($name, $surname, $birthDate, $birthPlace, $fc);
        $this->setDiv($dividend);
        $this->setBonus($bonus);

    }

    public function setDiv($dividend)
    {
        $this->dividend = $dividend;
    }

    public function getDiv()
    {
        return $this->dividend;
    }

    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }

    public function getBonus()
    {
        return $this->bonus;
    }

    public function getAnnual()
    {
        return $this->dividend * 12 + $this->bonus;
    }
    public function getHtml()
    {
        return parent::getHtml()
            . "<h1> <ul> <li> RAL: €" . $this->getAnnual() . "</li>"
            . "<ul> <li> Dividendo: €" . $this->getDiv() . "</li>"
            . "<li> Bonus: €" . $this->getBonus() . "</li> </ul> </h1>";

    }

}