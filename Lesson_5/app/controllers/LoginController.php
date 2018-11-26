<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.11.2018
 * Time: 15:52
 */

namespace app\controllers;


use core\base\View;
use core\Request;
use core\base\Controller;

class LoginController extends Controller
{
    private $userLogin;

    public function __construct(Request $request, View $view)
    {
        parent::__construct($request, $view);
        //запись посещенной страницы в сессию
        $_SESSION['URI'][] = $_SERVER['REDIRECT_URL'];
    }

    public function login()
    {
        $this->checkUser();
        if (!isset($this->userLogin)) {
            return $this->render('registration');
        } else {
            $this->request->redirect("account");
        }
    }
    private function checkUser()
    {
        if ($this->request->isPost()) {
            $this->userLogin = $this->request->post('login');
            $this->request->session('login', $this->userLogin);
        }
    }
    public function account()
    {
        return $this->render('account', [
            'name' => $this->request->session('login'),
            //последние пять посященных страниц
            'uri' => array_slice($_SESSION['URI'], -5),
        ]);
    }


}