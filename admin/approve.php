<?php
  if (isset($_POST['approveID'])) {
    $approveID = $_POST['approveID'];
    $applicationStatus = 'approved';

    include '../connection/connection.php';

    $query = mysqli_query($con,
    "UPDATE id_applications
    SET status = '$applicationStatus'
    WHERE application_id = '$approveID'");

    if ($query) {
      echo "Application successfully approved.";
    } else {
      echo "Error " . mysqli_error($con);
    }
  } else {
    echo "Intruder";
  }
?>