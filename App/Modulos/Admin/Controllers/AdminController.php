<?php
namespace App\Modulos\Admin\Controllers;

use App\Core\Controller;
use App\Core\Database;
use App\Modulos\Admin\Models\AdminModel;

class AdminController extends Controller 
{
    private $db;
    private $adminModel;

    public function __construct() {
        parent::__construct('Admin');
        $database = new Database();
        $this->db = $database->getConnection();
        $this->adminModel = new AdminModel($this->db);
    }

    public function index() {
        $this->view('index', ['title' => 'Painel Administrativo']);
    }

    public function listarUsuarios() {
        $usuarios = $this->adminModel->getAllUsuarios();
        $this->view('gerenciar-usuarios', [
            'title' => 'Gerenciar Usuarios',
            'usuarios' => $usuarios
        ]);
    }
}
