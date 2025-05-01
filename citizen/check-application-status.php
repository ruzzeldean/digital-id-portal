<?php
session_start();
include '../connection/connection.php';

$citizenID = $_SESSION['citizenID'];

$query = mysqli_query($con, "SELECT status FROM id_applications WHERE citizen_id = '$citizenID'");

if (mysqli_num_rows($query) > 0) {
  $row = mysqli_fetch_assoc($query);
  echo json_encode(['status' => $row['status']]);
} else {
  echo json_encode(['status' => 'not_applied']);
}
?>