<?php

class Wage
{
    private $monthly;
    private $thirteenth;
    private $fourteenth;

    public function __construct($monthly, $thirteenth, $fourteenth)
    {

        $this->setMonthly($monthly);
        $this->setThirteenth($thirteenth);
        $this->setFourteenth($fourteenth);

    }


    public function setMonthly($monthly)
    {
        $this->monthly = $monthly;
    }

    public function getMonthly()
    {
        return $this->monthly;
    }

    public function setThirteenth($thirteenth)
    {
        $this->thirteenth = $thirteenth;
    }

    public function getThirteenth()
    {
        return $this->thirteenth;
    }

    public function setFourteenth($fourteenth)
    {
        $this->fourteenth = $fourteenth;
    }

    public function getFourteenth()
    {
        return $this->fourteenth;
    }

    public function getAnnual()
    {
        return $this->monthly * 12 + ($this->thirteenth === "si" ? $this->monthly : 0) + ($this->fourteenth === "si" ? $this->monthly : 0);
    }

    public function getHtml()
    {
        return "<ul> <li> mensilita: €" . $this->getMonthly() . "</li>"
            . "<li> tredicesima: " . $this->getThirteenth() . "</li>"
            . "<li> quattordicesima: " . $this->getFourteenth() . "</li> </ul>";

    }


}