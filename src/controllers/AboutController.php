<?php

namespace app\controllers;

use resources\libraries\Controller;


class AboutController extends Controller
{
    public function index(): void {
        $this->view->render('site/about');
    }
}
