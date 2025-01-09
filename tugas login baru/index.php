<?php
var_dump($_POST);
echo "</br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>low taper fade login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="main-area"></div>
    <div class="sidebar">
      <div class="profile-pic"></div>
      <form class="login-form" method="POST" action="">
        <input type="text" placeholder="username" name="username" required>
        <input type="password" placeholder="password" name="password" required>
        <button type="submit">Login</button>
        <a href="#" class="forgot-password">Lupa password?</a>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
