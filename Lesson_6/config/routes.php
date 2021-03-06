<?php
/**
 * Created by Artem Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2018
 */


use app\controllers\OrdersController;
use app\controllers\PageController;
use app\controllers\ShopController;
use app\controllers\SiteController;

/**
 * Настройки маршрутов приложения
 */
return [
    'routes' => [
        //'website/path' => ['ControllerClass', 'actionName'],
        '/' => [SiteController::class, 'index'],

        'pages' => [PageController::class, 'index'],
        'pages/new' => [PageController::class, 'add'],
        'page/{id}' => [PageController::class, 'show'],

        'shop' => [ShopController::class, 'index'],
        'shop/{id}' => [ShopController::class, 'show'],
        'product/{id}' => [ShopController::class, 'product'],

        'orders'=>[OrdersController::class, 'index'],
        'orders/{id}'=>[OrdersController::class, 'show'],
        'orders/new'=>[OrdersController::class, 'add'],
    ],
];