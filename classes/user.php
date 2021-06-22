<?php


class User {
    protected $name;
    protected $email;
    protected $primeSub;


    function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function setPrime($primeSub){
    $this->primeSub = $primeSub;
    }
}