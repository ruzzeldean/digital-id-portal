<?php
  if (
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['firstName']) &&
    isset($_POST['middleName']) &&
    isset($_POST['lastName'])
  ) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $role = 2;

    include './connection/connection.php';

    $query = mysqli_query($con,
    "INSERT INTO citizens(email, password, first_name, middle_name, last_name, role_id)
    VALUES('$email', '$password', '$firstName', '$middleName', '$lastName', '$role')");

    if ($query) {
      echo "Your account has been successfully created.";
    } else {
      echo "Error " . mysqli_error($con);
    }
  } else {
    echo "Intruder!";
  }
?>