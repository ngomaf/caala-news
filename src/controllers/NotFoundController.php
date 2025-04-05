<?php

namespace app\controllers;

use resources\libraries\Controller;


class NotFoundController extends Controller
{
    public function index(string $ctrl):void {
        $ctrl = ucfirst($ctrl);
        $message = "Crontroller {$ctrl} not found.";

        $this->view->render('site/error', [
            'error' => 404,
            'message' => $message,
        ]);
    }

    public function show(string $ctrl, string $method):void {
        $ctrl = ucfirst($ctrl);
        $message = "The method {$method}() not exist, in crontroller {$ctrl}.";

        $this->view->render('site/error', [
            'error' => 404,
            'message' => $message,
        ]);
    }
}
