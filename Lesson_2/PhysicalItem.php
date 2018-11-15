<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.11.2018
 * Time: 20:56
 */

require_once 'config.php';

class PhysicalItem extends Item{
    public $price;
    public function __construct(string $name, int $pricePhysicalItem)
    {
        $this->price = $pricePhysicalItem;
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
