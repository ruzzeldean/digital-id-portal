<?php 
  if (isset($_POST['citizenId'])) {
    $citizenId = $_POST['citizenId'];

    include '../connection/connection.php';

    $qryDelete = mysqli_query($con,
    "DELETE FROM citizens
    WHERE citizen_id = '$citizenId'");

    if ($qryDelete) {
      echo "A citizen was successfully removed.";
    } else {
      echo "Error";
    }
  } else {
    echo "Intruder!";
  }
?>