<?php
/**
 * Created by Artem Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2018
 */

namespace app\controllers;


use app\models\Shop_category;
use app\models\Shop_product;
use core\base\Controller;

class ShopController extends Controller
{

    public function index()
    {
        $pages = Shop_category::all();

        return $this->render('index', [
            'shop' => $pages,
        ]);
    }


    public function show($id)
    {
        // просмотр одной
        $page = Shop_category::findById($id);
        $product = Shop_product::all(Shop_product::find()
            ->where('shop_category_id= :id')
            ->setParameter('id',$id ));

        return $this->render('view', [
            'shops' => $page,
            'product' => $product,

        ]);
    }

}