<?php

require_once(__DIR__ . "../user.php");

class PrimeUser extends User {
    protected $shipping = 0;

    function __construct($name, $email) {
        parent::__construct($name, $email);

        

    }
}