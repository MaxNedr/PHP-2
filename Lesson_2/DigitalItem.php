<?php

require_once 'config.php';

class DigitalItem extends Item{
    function priceCalculation()
    {
        return parent::priceCalculation() / 2;
    }
}


