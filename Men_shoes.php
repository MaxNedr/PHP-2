<?php


class Men_shoes extends Product

{

    public $color;
    public $size;
    public $material;

    function show(){
        echo "Имя $this->name цена: $this->price из категории $this->category на складе в количестве $this->quantity \n 
        Материал $this->material размер $this->size цвет $this->color";
    }

}
