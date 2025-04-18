<?php 
  if (isset($_POST['adminId'])) {
    $adminId = $_POST['adminId'];

    include '../connection/connection.php';

    $qryDelete = mysqli_query($con,
    "DELETE FROM admins
    WHERE admin_id = '$adminId'");

    if ($qryDelete) {
      echo "An admin was successfully removed.";
    } else {
      echo "Error";
    }
  } else {
    echo "Intruder!";
  }
?>