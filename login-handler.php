<?php
  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    include './connection/connection.php';

    $query = mysqli_query($con,
    "SELECT * FROM citizens
    WHERE email = '$email'
    AND password = '$password'");

    if (mysqli_num_rows($query) > 0) {
      $row = mysqli_fetch_assoc($query);

      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

      $_SESSION['gatepass'] = 'citizen';
      $_SESSION['citizenID'] = $row['citizen_id'];
      $_SESSION['firstName'] = $row['first_name'];
      $_SESSION['middleName'] = $row['middle_name'];
      $_SESSION['lastName'] = $row['last_name'];

      echo "success";
    } else {
      echo "Incorrect email or password.";
    }
  } else {
    echo "Intruder!";
  }
?>