<?php

namespace app\controllers;

use resources\libraries\Controller;


class HomeController extends Controller
{
    public function index():void {
        echo "HomeController/index";

        $this->view->render('site/home');
    }
}