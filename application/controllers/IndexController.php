<?php

namespace application\controllers;

use application\core\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
        $this->view->render('Главная страница');
    }

}
