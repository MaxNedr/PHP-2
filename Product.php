<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.11.2018
 * Time: 10:21
 */


class Product
{

    public $name;
    public $price;
    public $id;
    public $category;
    public $quantity;
    public function __construct(string $name)
    {
        $this->name = $name;

    }
    function render(){
        echo "Имя $this->name цена: $this->price из категории $this->category на складе в количестве $this->quantity";
    }
}