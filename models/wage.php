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

    public function setThirteenth($thirteenth)
    {

        $this->thirteenth = $thirteenth;
    }

    public function setFourteenth($fourteenth)
    {

        $this->fourteenth = $fourteenth;
    }


}