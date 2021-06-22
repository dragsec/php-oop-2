<?php

require_once "./classes/products/smartphoneProduct.php";
require_once "./classes/user.php";
require_once "./classes/cart.php";
require_once "./classes/users/primeUser.php";

$user = new PrimeUser("Mario Rossi", "mario.rossi@gmail.com");
$cart = new Cart($user);
$creditCard = new CreditCard(1234123412341234, '12/2012', 666);


$SGS21 =new SmartphoneProduct("Galaxy", 1, 950, "S21", "Samsung");
$cart->addProduct($SGS21);

$redmi9 = new SmartphoneProduct("Redmi", 1, 200, "9", "Xiaomi");
$cart->addProduct($redmi9);

var_dump($cart);