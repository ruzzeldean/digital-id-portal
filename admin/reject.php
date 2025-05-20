<?php
  if (isset($_POST['rejectID'])) {
    $rejectID = $_POST['rejectID'];
    $applicationStatus = 'rejected';

    include '../connection/connection.php';

    $query = mysqli_query($con,
    "UPDATE id_applications
    SET status = '$applicationStatus'
    WHERE application_id = '$rejectID'");

    if ($query) {
      echo "Application successfully rejected.";
    } else {
      echo "Error " . mysqli_error($con);
    }
  } else {
    echo "Intruder";
  }
?>