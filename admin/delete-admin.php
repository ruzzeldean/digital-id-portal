<?php 
  if (isset($_POST['id'])) {
    $id = $_POST['id'];

    include '../connection/connection.php';

    $qryDelete = mysqli_query($con,
    "DELETE FROM admins
    WHERE id = '$id'");

    if ($qryDelete) {
      echo "An admin was successfully removed.";
    } else {
      echo "Error";
    }
  } else {
    echo "Intruder!";
  }
?>