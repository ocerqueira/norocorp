<?php
namespace App\Core;

class Router
{
    public function run()
    {
        // Obtém a URL a partir dos parâmetros de consulta
        $url = isset($_GET['url']) ? $_GET['url'] : 'dashboard';
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);

        // Determina o nome do módulo, controlador e método
        $nomeModulo = ucfirst($url[0]);
        $nomeController = ucfirst($url[0]) . 'Controller';
        $nomeMetodo = isset($url[1]) ? $url[1] : 'index';
        $params = array_slice($url, 2);

        // Constrói o caminho do arquivo do controlador
        $arquivoController = __DIR__ . '/../Modulos/' . $nomeModulo . '/Controllers/' . $nomeController . '.php';

        // // Debugging: Imprime informações de depuração
        // echo "Arquivo Controller: $arquivoController<br>";
        // echo "Namespace: App\Modulos\\{$nomeModulo}\\Controllers\\$nomeController<br>";
        // echo "URL: "; print_r($url); echo "<br>";
        // echo "Módulo: $nomeModulo<br>";
        // echo "Controlador: $nomeController<br>";
        // echo "Método: $nomeMetodo<br>";
        // echo "Parâmetros: "; print_r($params); echo "<br>";

        // Verifica se o arquivo do controlador existe
        if (file_exists($arquivoController)) {
            // echo "Arquivo do controlador encontrado.<br>";
            require_once $arquivoController;
            $controllerNamespace = 'App\Modulos\\' . $nomeModulo . '\\Controllers\\' . $nomeController;
            if (class_exists($controllerNamespace)) {
                // echo "Classe $controllerNamespace encontrada.<br>";
                $controller = new $controllerNamespace;

                if (method_exists($controller, $nomeMetodo)) {
                    // echo "Método $nomeMetodo encontrado.<br>";
                    call_user_func_array([$controller, $nomeMetodo], $params);
                } else {
                    echo "Método {$nomeMetodo} não encontrado!";
                }
            } else {
                echo "Classe {$controllerNamespace} não encontrada!";
            }
        } else {
            echo "Controlador {$nomeController} não encontrado!";
        }
    }
}
