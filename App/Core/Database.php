<?php
namespace App\Core;

use PDO;
use PDOException;

class Database {
    private $host;
    private $db_name;
    private $username;
    private $password;
    private $charset;
    public $db;

    public function __construct() {
        $config = require __DIR__ . '/../Config/database.php';
        $this->host = $config['host'];
        $this->db_name = $config['dbname'];
        $this->username = $config['usuario'];
        $this->password = $config['senha'];
        $this->charset = $config['charset'];
    }

    public function getConnection() {
        $this->db = null;
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=" . $this->charset;
            $this->db = new PDO($dsn, $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->db;
    }
}
