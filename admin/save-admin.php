<?php
  if (
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['firstName']) &&
    isset($_POST['middleName']) &&
    isset($_POST['lastName']) &&
    isset($_POST['role'])
  ) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $role = $_POST['role'];

    include '../connection/connection.php';

    $query = mysqli_query($con,
    "INSERT INTO admins(username, password, first_name, middle_name, last_name, role_id)
    VALUES('$username', '$password', '$firstName', '$middleName', '$lastName', '$role')");

    if ($query) {
      echo "New admin successfully added.";
    } else {
      echo "Error " . mysqli_error($con);
    }
  } else {
    // modify this later
    echo "Intruder!";
  }
?>