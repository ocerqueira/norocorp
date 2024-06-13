<?php

namespace App\Modulos\Dashboard\Models;

use App\Core\Model;

class DashboardModel extends Model
{
    public function obterMensagem()
    {
        return "Esta é uma mensagem do modelo Dashboard.";
    }
}
