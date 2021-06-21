<?php

require_once(__DIR__ . "../product.php");

class smartphoneProduct extends Product {
    protected $marca;
    protected $modello;


    function __construct($name, $quantity, $price){

        parent::__construct($name, $quantity, $price, $marca, $modello);
    }

    public function setMarca($value){
        $this->marca = $value;
    }

    public function setModello($value){
        $this->modello = $value;
    }

    
    public function getMarca($value){
        return $this->marca;
    }

    public function getModello($value){
        return $this->modello;
    }


}