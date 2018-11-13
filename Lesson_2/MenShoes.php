<?php

require '../Lesson_1/Product.php';

class MenShoes extends Product

{

    public $color;
    public $size;
    public $material;
    public function __construct(string $name, string $color) {
        parent::__construct($name);

        $this->color = $color;
    }
    function show(){
        echo "Имя $this->name цена: $this->price из категории $this->category на складе в количестве $this->quantity \n 
        Материал $this->material размер $this->size цвет $this->color";
    }

}
