<?php

namespace app\controllers;

use resources\libraries\Controller;


class NoticeController extends Controller
{
    public function index():void
    {
        $this->view->render('site/notices');
    }
    
    public function show(string $slug):void
    {
        echo "Notice/show: {$slug}";
    }

    public function category(array $cat=[]):void 
    {
        $cat = implode('-', $cat);
        echo ($cat==[])? "Notice/category": "Notice/category: {$cat}";
    }
}
