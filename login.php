<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $sql = "SELECT * FROM admins WHERE username='$user' AND password='$pass'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "Login successful. Welcome, $user!";
  } else {
    echo "Invalid login";
  }
}
?>

<form method="post">
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <button type="submit">Login</button>
</form>