<?php

require_once(__DIR__ . "../payment.php");

class creditCard extends Payment {
    
    protected $number;
    protected $scadenza;
    protected $cvv;

    function __construct($name, $date, $number, $scadenza, $cvv){

        parent::__construct($name, $date);

        $this->setNumber($number);
        $this->setScadenza($scadenza);
        $this->setCvv($cvv);
    }


    public function setNumber($value) {

        $this->number = $value;
    }


    public function setScadenza($value) {
        $this->scadenza = $value;
    }


    public function setCvv($value) {
    
        $this->cvv = $value;
    }


    public function getNumber() {
        return $this->number;
    }


    public function getScadenza() {
        return $this->date;
    }


    public function getCvv() {
        return $this->cvv;
    }
}