<?php
namespace App\Modulos\Admin\Models;

use App\Core\Model;

class AdminModel extends Model
{
    public function __construct($db) {
        parent::__construct();
        $this->db = $db;
    }

    public function obterMensagem() {
        return "Esta é uma mensagem do modelo Admin.";
    }

    public function getAllUsuarios() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
