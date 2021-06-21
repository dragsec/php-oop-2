<?php

require_once(__DIR__ . "../product.php");

class smartphoneProduct extends Product {
    protected $marca;
    protected $modello;


    function __construct($name, $price){

        parent::__construct($name, $quantity, $price, $marca,  $modello);
    }



    
}