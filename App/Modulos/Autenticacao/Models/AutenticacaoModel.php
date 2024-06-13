<?php 

namespace App\Modulos\Autenticacao\Models;

use App\Core\Model;

class AutenticacaoModel extends Model 
{
    public function autenticar($usuario, $senha)
    {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $stmt->execute($usuario);
        $user = $stmt->fetch();

        if ($user && password_verify($senha, $user["senha"])) {
            return $user;
        }
        return false;
    }

    public function recuperarPermissoes($usuario_id, $perfil_id)
    {
        $permissoes = [];

        //permissões especificas do usuário
        $stmt = $this->db->prepare("
            SELECT a.atributo
            FROM atibutos a
            JOIN atributos_usuarios au ON a.id = au.atributo_id
            WHERE au.usuario_id = ?
        ");
        $stmt->execute($usuario_id);
        $permissoesUsuario = $stmt->fetchAll(\PDO::FETCH_COLUMN);


        //Permissões do perfil
        $stmt = $this->db->prepare("
            SELECT p.premissao
            FROM permissoes p
            JOIN perfis_permissoes pp ON p.id = pp.permissao_Id
            WHERE pp.perfil_id = ?
        ");

        $stmt->execute($perfil_id);
        $perimissoesPerfil = $stmt->fetchAll(\PDO::FETCH_COLUMN);

        $permissoes = array_merge($permissoesUsuario, $perimissoesPerfil);
        return array_unique($permissoes);
    }
}