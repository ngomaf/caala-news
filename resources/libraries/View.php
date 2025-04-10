<?php

namespace resources\libraries;

class View
{
    public function render(string $view, array $datas=[]):void
    {
        extract($datas);
        require_once "../resources/views/{$view}.php";
    }

    public function procNum(int $number): string {
        return (gettype($number)=='integer')? number_format($number, 0, ',', '.'): 0;
    }

    public function procDate(string $date): string {
        $month = [
            'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 
            'Jun', 'Jul', 'Ago', 'Set', 'Out',
            'Nov', 'Dez',
        ];              
                    
        $d = date("d", strtotime($date));
        $m = $month[date("m", strtotime($date)) - 1];
        $Y = date("Y", strtotime($date));
        
        return "$d $m $Y";
    }
}
