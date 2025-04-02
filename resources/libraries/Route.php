<?php

namespace resources\libraries;

class Route
{
    static function index():void
    {
        $uri = self::uri();

        if(sizeof($uri) == 1 && $uri[0] == '') {
            (new \app\controllers\HomeController)->index();
            return;
        }

        if(file_exists(PATH . '/src/controllers/' . ucfirst($uri[0]) . 'Controller.php') && sizeof($uri) < 3) {
            $nameCtrl = ucfirst($uri[0]) . 'Controller';
            $ctrl = "app\\controllers\\{$nameCtrl}";

            if(sizeof($uri)==1) {
                (new $ctrl)->index();
                return;
            }

            if(method_exists($ctrl, $uri[1])) {
                (new $ctrl)->{$uri[1]}();
                return;
            }

            (new $ctrl)->show($uri[1]);
            return;
        }

        if(file_exists(PATH . '/src/controllers/' . ucfirst($uri[0]) . 'Controller.php') && sizeof($uri) > 2) {
            $nameCtrl = ucfirst($uri[0]) . 'Controller';
            $ctrl = "app\\controllers\\{$nameCtrl}";

            $datas = $uri;
            array_shift($datas);

            if(method_exists($ctrl, $uri[1])) {
                array_shift($datas);
                (new $ctrl)->{$uri[1]}($datas);
                return;
            }

            (new \app\controllers\NotFoundController)->show($uri[0] . 'Controller', $uri[1]);
            return;
        }

        (new \app\controllers\NotFoundController)->index($uri[0] . 'Controller');
    }

    static function uri():array
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');

        $uri = explode('/', $uri);

        return $uri;
    }
}
