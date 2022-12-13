<?php

class CreditCard {
    private $number;
    private $cvv;
    private $exp_yyyy;
    private $exp_mm;

    function __construct(String $number, String $cvv, String $exp_yyyy, String $exp_mm)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->exp_yyyy = $exp_yyyy;
        $this->exp_mm = $exp_mm;
    }

    public function getYear(){
        return $this->exp_yyyy;
    }

    public function getMonth(){
        return $this->exp_mm;
    }
}