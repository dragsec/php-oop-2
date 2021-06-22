<?php

class Cart {
    private $user;
    private $payment;
    private $products;

    function __construct($user) {
        $this->user = $user;
    }
}