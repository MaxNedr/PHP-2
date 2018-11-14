<?php


require_once 'config.php';


class PhysicalItem extends Item{

    public function __construct(string $name,int $price)
    {
        $this->price = $price;

        parent::__construct($name);
    }
    public function priceCalculation()
    {
        return $this->price;
    }
    public function priceDigitalCalculation()
    {
        return $this->price/2;
    }

}