<?php



class User {
    protected $name;
    protected $email;
    protected $primeSub = false;

    function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function setPrime($primeSub){
    $this->primeSub = $primeSub;
    }
}


/* $user = new User ("", "");

$user->setPrime(new primeSub()) */