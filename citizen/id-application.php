<?php
  if (
    isset($_POST['citizenID']) &&
    isset($_POST['dateOfBirth']) &&
    isset($_POST['region']) &&
    isset($_POST['province']) &&
    isset($_POST['city']) &&
    isset($_POST['zipCode']) &&
    isset($_POST['barangay']) &&
    isset($_POST['streetAddress']) &&
    isset($_POST['photoUpload'])
  ) {
    $citizenID = $_POST['citizenID'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $region = $_POST['region'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $zipCode = $_POST['zipCode'];
    $barangay = $_POST['barangay'];
    $streetAddress = $_POST['streetAddress'];
    $photoUpload = $_POST['photoUpload'];

    include '../connection/connection.php';

    $query = mysqli_query($con,
    "INSERT INTO id_applications(citizen_id, date_of_birth, street_address, barangay, city, province, zip_code, region, photo_path)
    VALUES('$citizenID', '$dateOfBirth', '$streetAddress', '$barangay', '$city', '$province', '$zipCode', '$region', '$photoUpload')");

    if ($query) {
      echo "Your application has been submitted successfully.";
    } else {
      echo "Error " . mysqli_error($con);
    }
  } else {
    echo "Intruder!";
  }
?>