<?php

namespace App\Core;

class View
{
    public function render($view, $data = [])
    {
        $viewFile = '../App/Modulos/' . strtolower(explode('/', $view)[0]) . '/Views/' . explode('/', $view)[1] . '.php';
        $layoutFile = '../App/Modulos/Home/Views/layout.php';

        if (file_exists($viewFile)) {
            extract($data);
            $view = $viewFile;
            require_once $layoutFile;
        } else {
            echo "View não encontrada " . $viewFile;
        }
    }
}
