<?php
class CustomerModel {
   private $conn; 
    private $table = 'customer'; 
    public $id;
    public $Name;
    public $Username;
    public $Email;
    public $Password;

    // Constructor to initialize the database connection
    public function __construct($db) {
        $this->conn = $db; 
    }

    // Method to create a new customer
    public function create() {
        $query = "INSERT INTO " . $this->table . " (Name, Username, Email, Password) VALUES (:Name, :Username, :Email, :Password)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':Name', $this->Name);
        $stmt->bindParam(':Username', $this->Username);
        $stmt->bindParam(':Email', $this->Email);
        $stmt->bindParam(':Password', $this->Password);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Method to fetch a customer by username or email
    public function fetchCustomer() {
        $query = "SELECT * FROM " . $this->table . " WHERE Email = :Email OR Username = :Username LIMIT 1";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':Email', $this->Email);
        $stmt->bindParam(':Username', $this->Username);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
      
}
?>
