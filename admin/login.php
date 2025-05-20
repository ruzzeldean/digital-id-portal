<?php
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    include '../connection/connection.php';

    $query = mysqli_query($con,
    "SELECT * FROM admins
    WHERE username = '$username'
    AND password = '$password'");

    if (mysqli_num_rows($query) > 0) {
      $row = mysqli_fetch_assoc($query);

      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

      $_SESSION['gatepass'] = "admin";
      $_SESSION['firstName'] = $row['first_name'];
      $_SESSION['lastName'] = $row['last_name'];

      echo "success";
    } else {
      echo "Incorrect username or password.";
    }
  } else {
    echo "Intruder.";
  }
?>