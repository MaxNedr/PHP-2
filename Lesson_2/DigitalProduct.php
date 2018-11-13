<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.11.2018
 * Time: 22:11
 */

require '../Lesson_1/Product.php';

class DigitalProduct extends Product
{
    public $quantity = 10;
    public $price = 100;

    public function __construct(string $name) {
        parent::__construct($name);

    }

    public function countingCost(){
        echo $this->price * $this->quantity;

    }
}

$digitalProduct = new DigitalProduct('music');
$digitalProduct->countingCost();
