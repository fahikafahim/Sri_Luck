<?php
require_once '../../../app/controllers/CustomerController.php';
$controller = new CustomerController();
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
<body class="bg-cover bg-center h-screen" style="background-image: url('./../../images/lg.jpg');">

  <!-- Main Container -->
  <div class="flex flex-wrap items-center justify-center min-h-screen space-x-4">
    <!-- Customer Login -->
<div class="bg-[#F8F5EF] p-8 rounded-lg shadow-md max-w-md w-full min-h-[500px] flex flex-col justify-between">
  <h2 class="text-3xl font-semibold text-center mb-4">Customer</h2>
  <div class="flex justify-center mb-4">
    <span class="text-6xl icon-custom-color">👥</span>
  </div>
  <form method="POST" action="http://localhost/SRILUCK_PHP/app/veiws/user/user_login.php" class="form-container">
  
  <div>
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username" class="input-field">
                </div>
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="input-field">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" class="input-field">
                </div>
                <div class="text-center px-28 py-2.5">
                    <button type="submit" class="btn">Sign In</button>
                </div>

  
</form>

  <div class="text-center mt-4 text-gray-600">
    <p>Don't have an account? 
      <a href="./register.php" class="text-blue-600 hover:underline">Register</a>
    </p>
  </div>
  <div class="flex justify-center space-x-6 mt-6 text-gray-600">
    <a href="#" class="icon-custom-color"><i class="fab fa-facebook-f text-2xl"></i></a>
    <a href="#" class="icon-custom-color"><i class="fab fa-instagram text-2xl"></i></a>
    <a href="#" class="icon-custom-color"><i class="fab fa-twitter text-2xl"></i></a>
  </div>
</div>


  </div>
</body>
</html>
