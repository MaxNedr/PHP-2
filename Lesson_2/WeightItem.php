<?php

require_once "config.php";

class WeightItem extends Item
{
    function proceeds($count) {
        $message = 'Выручка составила: ';
        return $message . ($this->priceCalculation() * $count);
    }
}