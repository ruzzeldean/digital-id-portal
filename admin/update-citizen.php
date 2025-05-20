<?php
  if (
    isset($_POST['editId']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['firstName']) &&
    isset($_POST['middleName']) &&
    isset($_POST['lastName'])
  ) {
    $editId = $_POST['editId'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];

    include '../connection/connection.php';

    $query = mysqli_query($con,
    "UPDATE citizens
    SET email = '$email', password = '$password', first_name = '$firstName', middle_name = '$middleName', last_name = '$lastName'
    WHERE citizen_id = '$editId'");

    if ($query) {
      echo "Citizen record successfully updated.";
    } else {
      echo "Error " . mysqli_error($con);
    }
  } else {
    echo "Intruder!";
  }
?>