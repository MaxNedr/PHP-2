<?php

require_once "config.php";

class WeightItem extends Item
{
    public $price;
    public function __construct(string $name, int $price)
    {
        $this->price = $price;
        parent::__construct($name);
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