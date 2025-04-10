<?php

namespace app\controllers;

use app\models\Notice;
use resources\libraries\Controller;


class HomeController extends Controller
{
    public function index():void {
        $notice = new Notice;

        $this->view->render('site/home', [
            'datas' => $notice->get(),
            'moreViews' => $notice->getMoreViews()
        ]);
    }
}