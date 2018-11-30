<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.11.2018
 * Time: 7:04
 */

namespace app\controllers;


use app\models\Orders;
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

    public function show()
    {
        return $this->render('view', []);
    }
}