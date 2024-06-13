<?php

namespace App\Modulos\Sidebar\Controllers;
use App\Core\Controller;

class SidebarController extends Controller
{
    public function __construct() {
        parent::__construct('Sidebar');
    }

    public function index() {
        $this->view('index', ['title' => 'Sidebar']);
    }
}