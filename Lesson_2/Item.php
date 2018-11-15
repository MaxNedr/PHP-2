<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.11.2018
 * Time: 20:33
 */

abstract class Item
{

    public $name;


    public function __construct( string $name)
    {
        $this->name = $name;

    }




}