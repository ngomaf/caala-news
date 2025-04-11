<?php

namespace app\controllers;

use MatthiasMullie\Minify\CSS;
use MatthiasMullie\Minify\JS;
use resources\libraries\Controller;

class ConfController extends Controller
{
    public function index(string|null $message='') {
        $this->view->render('site/conf', ['msg'=>$message]);
    }

    public function default(): void {$this->genCSS('default', ['default']);}
    public function defaultJS(): void {$this->genJS('default', ['default']);}

    public function conf(): void {$this->genCSS('conf', ['default','conf']);}
    public function confJS(): void {$this->genJS('conf', ['default']);}
    
    public function home(): void {$this->genCSS('home', ['default','home']);}
    public function homeJS(): void {$this->genJS('home', ['default','home']);}

    public function notice(): void {$this->genCSS('notice', ['default','notice']);}
    public function noticeJS(): void {$this->genJS('notice', ['default']);}

    public function error(): void {$this->genCSS('error', ['default','error']);}
    public function errorJS(): void {$this->genJS('error', ['default']);}

    public function genCSS(string $resultFile, array $CSSFiles): void
    {
        $pathFile = "/public/assets/css/{$resultFile}.min.css";
        $minCSS = new CSS();

        foreach($CSSFiles as $val) {
            $minCSS->add(PATH . "/public/assets/css/{$val}.css");
        }

        $result = $minCSS->minify(PATH . $pathFile);

        $message = (getType($result)=='string')?
        "<p class='msgSuccess'>Sucesso! Minificação realizada com sucesso. path: {$pathFile}</code></p>":
        "<p class='msgError'>Erro! Houve um erro a processar a minificação</p>";

        $this->index($message);
    }

    public function genJS(string $resultFile, array $JSFiles): void
    {
        $pathFile = "/public/assets/js/{$resultFile}.min.js";
        $minJS = new JS();

        foreach($JSFiles as $val) {
            $minJS->add(PATH . "/public/assets/js/{$val}.js");
        }

        $result = $minJS->minify(PATH . $pathFile);

        $message = (getType($result)=='string')?
        "<p class='msgSuccess'>Sucesso! Minificação realizada com sucesso. path: {$pathFile}</code></p>":
        "<p class='msgError'>Erro! Houve um erro a processar a minificação</p>";

        $this->index($message);
    }
}
