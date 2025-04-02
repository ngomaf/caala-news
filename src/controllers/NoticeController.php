<?php

namespace app\controllers;

class NoticeController
{
    public function index():void
    {
        echo "Notice/index";
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
