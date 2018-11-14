<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.11.2018
 * Time: 20:33
 */

abstract class Item
{

    public $name;
    public $price;

    public function __construct( string $name)
    {
        $this->name = $name;
        $this->price = 100;
    }

    public function priceCalculation()
    {
        return $this->price;
    }

    public function proceeds($count)
    {
        $message = 'Выручка составила: ';
        return $message . ($this->priceCalculation() * $count);
    }
}