<?php

class Product {
    protected $name;
    protected $quantity;
    protected $price;

    function __construct($name, $quantity, $price) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }
}