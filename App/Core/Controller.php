<?php
namespace App\Core;

class Controller
{
    public function view($view, $dados = [])
    {
        $dados['modulo'] = $this->modulo; // Adiciona o nome do módulo aos dados
        extract($dados);
        $viewPath = '../App/Modulos/' . $this->modulo . '/Views/' . $view . '.php';
        if (file_exists($viewPath)) {
            ob_start();
            require_once $viewPath;
            $content = ob_get_clean();
            require_once '../App/Core/Views/layout.php';
        } else {
            echo "Template {$view} não encontrado!";
        }
    }

    protected $modulo;

    public function __construct($modulo)
    {
        $this->modulo = $modulo;
    }
}
