<?php
  session_start();

  include '../connection/connection.php';

  $citizenID = $_SESSION['citizenID'];

  $query = mysqli_query($con,
  "SELECT * FROM id_applications
  WHERE citizen_id = '$citizenID'");

  if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    if ($row['status'] === 'pending') {
      echo "Application still in review.";
    } else if ($row['status'] === 'approved') {
      echo "Application approved.";
    } else {
      echo "Application rejected.";
    }
  } else {
    echo "No application yet.";
  }
?>