<?php
require_once 'C:\xampp\htdocs\Sriluck_PHP\app\controllers\AdminController.php';
$controller = new AdminController();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->authenticate();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <title>Login | Sri Luck</title>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link href="/SRILUCK_PHP/public/css/tailwind.css" rel="stylesheet">
  <style>
    /* Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');

    /* Welcome Text Cursive Font */
    .cursive-text {
      font-family: 'Dancing Script', cursive;
      color: white;
    }

    /* Custom Color for Buttons and Icons */
    .custom-color {
      background-color: #ac8f79;
      color: white;
    }
    .custom-color:hover {
      background-color: #946e60;
    }
    .icon-custom-color {
      color: #ac8f79;
    }
    .icon-custom-color:hover {
      color: #946e60;
    }
  </style>
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('./../../images/admin.jpg');">
  
  <!-- Main Container -->
  <div class="flex flex-wrap items-center justify-center min-h-screen space-x-4">
   
<!-- Admin Login -->
<div class="bg-[#F8F5EF] p-8 rounded-lg shadow-md max-w-md w-full min-h-[500px] flex flex-col justify-between">
  <h2 class="text-3xl font-semibold text-center mb-4">Admin</h2>
  <div class="flex justify-center mb-4">
    <span class="text-6xl icon-custom-color">⚙️</span>
  </div>
  <form method="POST" action="admin_login.php" class="form-container">
  <div>
    <label for="username" class="block mb-2">User Name</label>
    <input type="text" id="username" name="username" placeholder="Enter admin username" class="input-field">
  </div>

  <div>
    <label for="password" class="block mb-2">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter admin password" class="input-field">
  </div>

  <button type="submit" class="btn">LOGIN</button>
</form>

  <div class="flex justify-center space-x-6 mt-6 text-gray-600">
    <a href="#" class="icon-custom-color"><i class="fab fa-facebook-f text-2xl"></i></a>
    <a href="#" class="icon-custom-color"><i class="fab fa-instagram text-2xl"></i></a>
    <a href="#" class="icon-custom-color"><i class="fab fa-twitter text-2xl"></i></a>
  </div>
</div>

  </div>
</body>
</html>
