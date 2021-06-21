<?php

require_once(__DIR__ . "../payment.php");

class creditCard extends Payment {
    
    protected $number;
    protected $scadenza;
    protected $cvv;

    function __construct($name, $date, $number, $scadenza, $cvv){

        parent::__construct($name, $date);

        $this->__number($number);
        $this->__scadenza($scadenza);
        $this->__cvv($cvv);
    }








}