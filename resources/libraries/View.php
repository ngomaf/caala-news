<?php

namespace resources\libraries;

class View
{
    public function render(string $view, array $datas=[]):void
    {
        extract($datas);
        require_once "../resources/views/{$view}.php";
    }
}
