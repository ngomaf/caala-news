<?php

namespace app\controllers;

class NotFoundController
{
    public function index(string $ctrl):void {
        echo "Crontroller {$ctrl} not found.";
    }

    public function show(string $ctrl, string $method):void {
        echo "The method {$method} not exist, in crontroller {$ctrl}.";
    }
}
