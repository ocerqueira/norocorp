<?php
namespace App\Modulos\Dashboard\Controllers;

use App\Core\Controller;

class DashboardController extends Controller {
    public function __construct() {
        parent::__construct('Dashboard');
    }

    public function index() {
        $this->view('index', ['title' => 'Dashboard']);
    }
}
