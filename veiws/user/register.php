<?php
require_once '../../controllers/CustomerController.php';
$controller = new CustomerController();
$controller->create();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="/SRILUCK_PHP/public/css/tailwind.css" rel="stylesheet">
  <title>Register | Sri Luck</title>
  <style>
    /* Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');

    /* Welcome Text Cursive Font */
    .cursive-text {
      font-family: 'Dancing Script', cursive;
      color: white;
    }
  </style>
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('./../../images/lg.jpg');">


<!-- Registration Form Section -->
<div class="flex items-center justify-center min-h-screen">
  <div class="bg-[#F8F5EF] p-8 rounded-lg shadow-md mx-4 w-full max-w-md">
    <h2 class="text-4xl font-semibold text-center mb-6">Register</h2>

    <!-- Display success message -->
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
      <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        Registration successful!
      </div>
    <?php endif; ?>

    <form action="http://localhost/Sriluck_PHP/App/veiws/user/register.php" method="POST" class="form-container">
  

    <div>
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" class="input-field" required>
                </div>
                <div>
                    <label for="Username" class="sr-only">Username</label>
                    <input type="text" id="Username" name="username" placeholder="Username" class="input-field" required>
                </div>
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="input-field" required>
                </div>
                <div>
                    <label for="Password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" class="input-field" required>
                </div>
                <div class="text-center px-28 py-2.5">
                    <button type="submit" id="submitBtn" class="btn" onclick="this.disabled=true;this.form.submit();">Sign Up</button>
                </div>

  
</form>

</div>

</body>
</html>
