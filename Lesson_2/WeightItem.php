<?php

require_once "item.php";

class WeightItem extends Item{

    public function __construct(string $name,int $price)
    {
        $this->price = $price;

        parent::__construct($name);
    }
}