<?php

namespace app\models;


class Notice
{
    private string $database = PATH . '/resources/libraries/database.php';
    
    public function get(): array
    {
        require_once $this->database;

        foreach($notices as $val) {
            $val['fk_category'] = $this->getCategory($val['fk_category'], $categories);
        }

        return $notices;
    }

    public function getBySlug(string $slug):array
    {
        require_once $this->database;
        return [$slug];
    }

    public function getCategory(string $slug, array $categories):array
    {
        $category = array();

        var_dump($slug);

        foreach($categories as $val) {if($val['slug'] == $slug) $category = $val;}

        return $category;
    }

    public function getImage(int $index):array
    {
        require_once $this->database;
        return [$index];
    }
}
