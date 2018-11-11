<?php

//require 'User.php';
require 'Student.php';
require 'Product.php';
require 'Men_shoes.php';

$john = new User('John');
//$john->password = '123123';
$john->setPassword('123123');
$john->userType = User::USER_TYPE_ADMIN;

$artur = new User('Artur');
//$john->login = 'John';
//$john->showHello();
//$artur->showHello();
//var_dump($john);
//print_r($john);
//var_dump($john->validatePassword('1231232'));
//echo $john->password;

//$artur->showTypes();

//User::showTypes();
//$artur->showCounter();
//User::showCounter();

$testStudent = new Student('Jimmy', 10);
//$testStudent->showHello();

$item = new Product('Новый товар');
$item->category = "Новая категория";
$item->quantity = 2;
$item->price = 50;
$item->render();

$shoes = new Men_shoes('Ботинки','red');
$shoes->quantity = 4;
$shoes->price = 250;
$shoes->category = "Зимняя обувь";
$shoes->material = "Human skin";
$shoes->size = 45;
$shoes->show();

