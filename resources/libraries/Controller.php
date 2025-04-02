<?php

namespace resources\libraries;

use resources\libraries\View;


class Controller
{
    protected View $view;

    public function __construct()
    {
        $this->view = new View;
    }
}
