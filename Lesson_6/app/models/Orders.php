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
 * @property string $created_at
 * @property string $comment
 * @property string $keywords
 * @property int $order_status_id
 */
class Orders extends ActiveRecord
{

}