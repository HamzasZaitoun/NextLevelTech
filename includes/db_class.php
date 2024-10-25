<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'gameshop';
    private $username = 'root';
    private $password = '';
    public $pdo;

    public function connect() {
        $this->pdo = null;
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->pdo;
    }
}
?>