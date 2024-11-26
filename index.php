<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Login Layout</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="main-area"></div>
    <div class="sidebar">
      <div class="profile-pic"></div>
      <form class="login-form" method="POST" action="login.php">
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

<?php
// Connect to the database
include("koneksi.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the username and password from the form
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Prepare the SQL query
  $query = "SELECT * FROM users WHERE username = ? AND password = ?";
  $stmt = $koneksi->prepare($query);
  $stmt->bind_param("ss", $username, $password);

  // Execute the query
  $stmt->execute();

  // Get the results
  $result = $stmt->get_result();

  // Check if the user exists
  if ($result->num_rows > 0) {
    // Redirect to the dashboard
    header("Location: dashboard.php");
  } else {
    // Display an error message
    echo "Invalid username or password";
  }

  // Close the statement
  $stmt->close();
}
?>
