<?php

require_once 'C:\xampp\htdocs\Sriluck_PHP\config\database.php';
require_once 'C:\xampp\htdocs\Sriluck_PHP\app\models\AdminModel.php';

class AdminController {
    private $db;
    private $login;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        $this->login = new Login($this->db);
    }

    public function authenticate() {
        session_start(); 

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->login->username = $_POST['username'] ?? ''; 
            $this->login->password = $_POST['password'] ?? '';

            $user = $this->login->fetchAdmin();

            if ($user && $user['password'] === $this->login->password) { 
                $_SESSION['username'] = $user['username'];
                $_SESSION['isAdmin'] = true;

                header("Location: http://localhost/SRILUCK_PHP/app/veiws/admin/admin_dashboard.php");
                exit;
            } else {
                echo "<script>alert('Invalid username or password. Please try again.');</script>";
            }
        }
    }

    public function adminlogout() {
        session_start(); 
        session_unset();
        session_destroy();


        header("Location: http://localhost/SRILUCK_PHP/app/veiws/admin/admin_login.php");
        exit;
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'adminlogout') {
    $controller = new AdminController();
    $controller->adminlogout();
}
?>
