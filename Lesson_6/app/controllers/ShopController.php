<?php
/**
 * Created by Artem Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2018
 */

namespace app\controllers;


use app\models\Shop_category;
use core\base\Controller;

class ShopController extends Controller
{
    /**
     * Просмотр списка всех страниц сайта
     * @return string
     */
    public function index()
    {
        $pages = Shop_category::all();

        return $this->render('index', [
            'shop' => $pages,
        ]);
    }

    /**
     * Просмотр выбранной страницы
     *
     * @param $id
     *
     * @return string
     */
    public function show($id)
    {
        // просмотр одной
        $page = Shop_category::findById($id);

        return $this->render('view', [
            'shop' => $page,
        ]);
    }

    /**
     * Добавление новой страницы
     */
   /* public function add()
    {
        // создание записи
        $page = new Shop();

        if ($this->request->isPost()) {
            if ($page->load($this->request->post())) {
                $page->save();

                $this->request->redirect('shop/' . $page->id);
            } else {
                $page->addError('title', 'Что-то пошло не так');
            }
        }

        return $this->render('form', [
            'page' => $page,
        ]);
    }*/
}