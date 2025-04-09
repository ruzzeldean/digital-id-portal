<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "digital_id_portal";

  $con = mysqli_connect($host, $user, $pass, $database);

  if (!$con) {
    echo "Error";
  }
?>