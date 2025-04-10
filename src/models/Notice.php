<?php

namespace app\models;


class Notice
{
    private string $path = PATH . '/resources/libraries/database.php';

    public function get(): array
    {
        require $this->path;

        $orderNotices = array();

        foreach($notices as $key => $val) {
            if($orderNotices == []) {
                $orderNotices[] = $val;
            } else {
                foreach($orderNotices as $index => $item) {
                    if($val['date'] > $item['date']) {
                        array_splice($orderNotices, $index, 0, [$val]);
                        break;
                    }
                }
            }
        }

        $orderNotices = array_slice($orderNotices, 0, 6); // out only three items

        foreach($orderNotices as $key => $val) {
            if($val['content']) $orderNotices[$key]['content'] = null;

            if($val['fk_category']) $orderNotices[$key]['fk_category'] = $this->getCategory($val['fk_category'], $categories);
            
            if($val['fk_image']) $orderNotices[$key]['fk_image'] = $this->getImage($val['fk_image'], $images);
        }

        return $orderNotices;
    } 

    public function getMoreViews(): array
    {
        require $this->path;

        $orderNotices = array();

        foreach($notices as $key => $val) {
            if($orderNotices == []) {
                $orderNotices[] = $val;
            } else {
                foreach($orderNotices as $index => $item) {
                    if($val['views'] > $item['views']) {
                        array_splice($orderNotices, $index, 0, [$val]);
                        break;
                    }
                }
            }
        }

        $orderNotices = array_slice($orderNotices, 0, 3); // out only three items

        foreach($orderNotices as $key => $val) {

            if($val['content']) $orderNotices[$key]['content'] = null;

            if($val['fk_category']) $orderNotices[$key]['fk_category'] = $this->getCategory($val['fk_category'], $categories);
            
            if($val['fk_image']) $orderNotices[$key]['fk_image'] = $this->getImage($val['fk_image'], $images);
        }

        return $orderNotices;
    }

    public function getBySlug(string $slug):array
    {
        require $this->path;

        $notice = array();

        foreach($notices as $key => $val) {
            if($val['slug'] == $slug) {
                $notice = $val;
            }
        }

        $notice['fk_category'] = $this->getCategory($notice['fk_category'], $categories);
        
        $notice['fk_image'] = $this->getImage($notice['fk_image'], $images);

        return $notice;
    }

    public function getCategory(string $slug, array $categories):array
    {
        $category = array();

        foreach($categories as $val) {if($val['slug'] == $slug) $category = $val;}

        return $category;
    }

    public function getImage(int $index, array $images):array
    {
        $image = array();
        foreach($images as $key => $val) {if($index==$key) $image = $val;}

        return $image;
    }
}
