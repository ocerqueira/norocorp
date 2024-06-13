<?php

require_once '../App/Core/Database.php';

use App\Core\Database;

$db = new Database();

try {
    $connection = $db->getConnection();
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
