<?php
  if (
    isset($_POST['editId']) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['firstName']) &&
    isset($_POST['middleName']) &&
    isset($_POST['lastName']) &&
    isset($_POST['role'])
  ) {
    $editId = $_POST['editId'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $role = $_POST['role'];

    include '../connection/connection.php';

    $query = mysqli_query($con,
    "UPDATE admins
    SET username = '$username', password = '$password', first_name = '$firstName', middle_name = '$middleName', last_name = '$lastName', role_id = '$role'
    WHERE admin_id = '$editId'");

    if ($query) {
      echo "Admin record successfully updated.";
    } else {
      echo "Error " . mysqli_error($con);
    }
  } else {
    echo "Intruder!";
  }
?>