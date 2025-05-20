<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['gatepass'])) {
  header("Location: ../login.php");
  exit;
}

$citizenID = $_SESSION['citizenID'];
$firstName = $_SESSION['firstName'];
$middleName = $_SESSION['middleName'];
$lastName = $_SESSION['lastName'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Citizen | Digital ID Portal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body data-page="my-digital-id">
  <div class="wrapper">
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid px-0">
            <a class="navbar-brand" href="./">My Digital ID <span class="d-none d-sm-inline-block">| Citizen's Account</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#navMenu" aria-controls="navMenu" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="navMenu" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title pe-3" id="offcanvasNavbarLabel">Digital ID Portal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                  <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./my-digital-id.php">My Digital ID</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                      <?php echo $_SESSION['firstName']; ?>
                      <i class="bi bi-person"></i></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Account</a></li>
                      <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                      <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <main class="d-flex flex-column justify-content-center align-items-center px-2 py-4 px-lg-0">
        <div id="application-status" class="alert" style="width: 100%; max-width: 37.5rem;"></div>

        <div class="register-form d-none border shadow rounded px-3 py-4 px-sm-4">
          <h3 class="mb-4">ID Application</h3>

          <div class="personal-info-section">
            <h5>Personal Information</h5>

            <input type="text" name="citizen-id" id="citizen-id" value="<?php echo $citizenID; ?>" disabled hidden>

            <div class="mb-3">
              <label class="form-label" for="first-name">First Name</label>
              <input class="form-control" type="text" name="first-name" id="first-name" value="<?php echo $firstName; ?>" readonly>
            </div>

            <div class="mb-3">
              <label class="form-label" for="middle-name">Middle Name</label>
              <input class="form-control" type="text" name="middle-name" id="middle-name" value="<?php echo $middleName; ?>" readonly>
            </div>

            <div class="mb-3">
              <label class="form-label" for="last-name">Last Name</label>
              <input class="form-control" type="text" name="last-name" id="last-name" value="<?php echo $lastName; ?>" readonly>
            </div>

            <div class="mb-3">
              <label class="form-label" for="date-of-birth">Date of Birth</label>
              <input class="form-control" type="date" name="date-of-birth" id="date-of-birth">
            </div>
          </div>

          <div class="row address-section">
            <h5 class="mt-4">Address</h5>

            <div class="col-md-6 mb-3">
              <label class="form-label" for="region">Region</label>
              <select class="form-select" name="region" id="region">
                <option value="" disabled selected>--Select Region--</option>
                <option value="CAR">CAR</option>
                <option value="NCR">NCR</option>
                <option value="Region V">Region V</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label" for="province">Province</label>
              <select class="form-select" name="province" id="province">
                <option value="" disabled selected>--Select Province--</option>
                <option value="Cavite">Cavite</option>
                <option value="NCR">NCR</option>
                <option value="Tarlac">Tarlac</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label" for="city">City/Municipality</label>
              <select class="form-select" name="city" id="city">
                <option value="" selected disabled>--Select City--</option>
                <option value="Baguio City">Baguio City</option>
                <option value="Pasig City">Pasig City</option>
                <option value="Quezon City">Quezon City</option>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label" for="zip-code">Zip Code</label>
              <input class="form-control" type="number" name="zip-code" id="zip-code" min="1">
            </div>

            <div class="col-12 mb-3">
              <label class="form-label" for="barangay">Barangay</label>
              <input class="form-control" type="text" name="barangay" id="barangay">
            </div>

            <div class="col-12 mb-3">
              <label class="form-label" for="street-address">Street Address</label>
              <input class="form-control" type="text" name="street-address" id="street-address">
            </div>
          </div>

          <div class="col-12 my-4 photo-upload-section">
            <h5>Photo Upload</h5>
            <input class="form-control" type="file" name="photo-upload" id="photo-upload">
          </div>

          <div class="col-12 submit-section mb-3">
            <button id="id-application-button" class="btn btn-primary w-100">Submit</button>
          </div>
        </div>
      <!-- </div> -->
    </main>

    <footer>
      <div class="container">
        <p>Footer</p>
      </div>
    </footer>
  </div>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>