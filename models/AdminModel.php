<?php

class Login {
    private $conn;
    private $table = 'admin'; 
    public $username;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Fetch admin by username
    public function fetchAdmin() {
        $query = "SELECT * FROM " . $this->table . " WHERE username = :username LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $this->username);

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching admin: " . $e->getMessage();
            return null;
        }
    }
}
?>
