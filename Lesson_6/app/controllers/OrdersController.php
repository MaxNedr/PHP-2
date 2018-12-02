<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.11.2018
 * Time: 7:04
 */

namespace app\controllers;


use app\models\Order_item;
use app\models\Orders;
use app\models\Shop_product;
use core\base\Controller;

class OrdersController extends Controller
{
    public function index()
    {
        $order = Orders::all();
        return $this->render('index', [

            'orders' => $order
        ]);
    }

    public function add()
    {
        return $this->render('index', []);
    }

    public function show($id)
    {
        // просмотр одной
        $order = Orders::findById($id);
        $product = Order_item::all(Order_item::find()
            ->where('order_id= :id')
            ->setParameter('id', $id));
        $prod = Shop_product::all(Shop_product::find()
            ->where('id= :id')
            ->setParameter('id', $id));

        return $this->render('view', [
            'orders' => $order,
            'product' => $product,
            'prod' => $prod,

        ]);

    }
}