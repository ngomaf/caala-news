<?php

namespace app\controllers;

use app\models\Notice;
use resources\libraries\Controller;


class NoticeController extends Controller
{
    public function index():void
    {
        $notice = new Notice;
        
        $this->view->render('site/notices', [
            'datas' => $notice->get(),
            'moreViews' => $notice->getMoreViews()
        ]);
    }
    
    public function show(string $slug):void
    {
        $notice = new Notice;

        $this->view->render('site/notice', ['notice' => $notice->getBySlug($slug)]);
    }

    public function category(array $cat=[]):void 
    {
        $categories = [
            ['Sociedade', 'sociedade', 230], 
            ['Desporto', 'desporto', 330], 
            ['Cultura', 'cultura', 210], 
            ['Ciência', 'ciencia', 129], 
            ['Arte', 'arte', 592], 
            ['outros', 'outros', 1031]
        ];

        if($cat != []) {
            $selected = [];
            foreach($categories as $value) {
                if($value[1] == $cat[0]) {
                    $selected[] = $value;
                }
            }
        }

        ($cat==[])? 
        $this->view->render('site/noticeCategories', ['categories' => $categories]): 
        $this->view->render('site/noticeCategory', ['categories' => $categories, 'category' => $selected[0]]);
    }
}
