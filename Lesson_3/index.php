<?php

require 'vendor/autoload.php';
require 'db/database.php';

use App\View\Page;

$page = new Page('home');

//echo $page->render([
//    'currentDate' => date('d-m-Y'),
//    'error' => false,
//    'users' => [
//        [
//            'login' => 'admin',
//            'email' => 'admin@com.com'
//        ],
//        [
//            'login' => 'admin2',
//            'email' => 'admin2@com.com'
//        ],
//        [
//            'login' => 'admin3',
//            'email' => 'admin3@com.com'
//        ],
//    ],
//]);

$imagesFromDb = getItemArray("select * from images");

$gallery = new Page('gallery');
echo $gallery->render(
   ['images'=>$imagesFromDb]

);
