<?php

namespace App\Modulos\Autenticacao\Controllers;

use App\Core\Controller;
use App\Modulos\Autenticacao\Models\AutenticacaoModel;

class AutenticacaoController extends Controller
{
    public function __construct($modulo)
    {
        parent::__construct($modulo);
    }

    public function index()
    {
        $this->view('login', ['title' => 'Login']);
    }

    public function login()
    {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            $authModel = new AutenticacaoModel();
            $user = $authModel->autenticar($usuario, $senha);

            if ($user) {
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil_id'] = $user['perfil_id'];
                $_SESSION['permissoes'] = $authModel->recuperarPermissoes($user['id'], $user['perfil_id']);

                header('Location: /dashboard');
                exit();
            } else {
                $this->view('login', ['erro' => 'Usuário ou senha inválidos']);
            }
        } else {
            $this->view('login');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
        exit();
    }
}
