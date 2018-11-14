<?php

require_once 'PhysicalItem.php';

class DigitalItem extends PhysicalItem {
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price/2;
    }


//    public function __construct(string $name)
//    {
//
//
////        parent::__construct($name,$this->price);
//    }
//
////    function priceCalculation()
////    {
////        return parent::priceCalculation() / 2;
////    }
}


