<?php
require_once '../../../config/database.php';
require_once '../../../app/models/CustomerModel.php';

class CustomerController {
    private $db; 
    private $customer; 

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        $this->customer = new CustomerModel($this->db);
    }

    // Method to create a customer
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->customer->Name = $_POST['name'];
            $this->customer->Username = $_POST['username'];
            $this->customer->Email = $_POST['email'];
            $this->customer->Password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            if ($this->customer->create()) {
                header("Location: http://localhost/SRILUCK_PHP/app/veiws/user/user_login.php");
                exit;
            } else {
                echo "<script>alert('Registration failed. Please try again.');</script>";
            }
        }
    }

    // Method to authenticate a customer
    public function authenticate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->customer->Email = $_POST['email'];
            $this->customer->Username = $_POST['username'];
            $password = $_POST['password']; 

            $user = $this->customer->fetchCustomer();

            if ($user && password_verify($password, $user['Password'])) {
                session_start();
                session_regenerate_id(true);
                $_SESSION['customer_id'] = $user['id']; 
                $_SESSION['customer_name'] = $user['Name'];
                header("Location: http://localhost/SRILUCK_PHP/app/veiws/user/");
                exit;
            } else {
                echo "<script>alert('Invalid credentials. Please try again.');</script>";
            }
        }
    }

    // Method to log out the customer
    public function customerlogout() {
        session_start();
        session_unset();  
        session_destroy(); 
        header('Location: http://localhost/SRILUCK_PHP/app/veiws/user/user_login.php'); 
        exit;
    }
}
if (isset($_GET['action']) && $_GET['action'] === 'customerlogout') {
    $controller = new CustomerController();
    $controller->customerlogout();
}

?>
