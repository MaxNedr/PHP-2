<?php

//require_once 'config.php';
require 'PhysicalItem.php';


class DigitalItem extends PhysicalItem {
    function priceCalculation()
    {
        return parent::priceCalculation() / 2;
    }
    public function proceeds($count)
    {
        $message = 'Выручка составила: ';
        return $message . ($this->priceCalculation() * $count);
    }
}


