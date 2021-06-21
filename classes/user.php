<?php

class User {
    protected $name;
    protected $email;
    protected $prime = false;

    function __construct($name, $email) {
        $this->$name = $name;
        $this->$email = $email;
    }



}