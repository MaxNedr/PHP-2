<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.11.2018
 * Time: 7:06
 */

namespace app\models;


use core\base\ActiveRecord;

/**
 * Class orders
 * @package app\models
 *
 * @property int $id
 * @property int $quantity
 * @property float $price
 *  @property int $shop_product_id
 * @property int $order_id
 */
class Order_item extends ActiveRecord
{

}