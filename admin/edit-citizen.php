<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['gatepass'])) {
  header("Location: ./");
  exit;
}

if (!isset($_GET['id'])) {
  echo "Intruder!";
  exit;
}

$citizenId = $_GET['id'];

include_once '../connection/connection.php';

$qry = mysqli_query(
  $con,
  "SELECT * FROM citizens
  WHERE citizen_id = '$citizenId'"
);

$row = mysqli_fetch_array($qry);

$email = $row['email'];
$password = $row['password'];
$firstName = $row['first_name'];
$middleName = $row['middle_name'];
$lastName = $row['last_name'];
$role = $row['role_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Digtal ID Portal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/adminlte/css/adminlte.min.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="./dashboard.php" class="brand-link">
        <img src="../assets/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName']; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="./dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./id-applications.php" class="nav-link">
                <i class="nav-icon fas fa-id-card"></i>
                <p>
                  ID Applications
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./citizens.php" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Citizens
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./admins.php" class="nav-link">
                <i class="nav-icon fas fa-user-shield"></i>
                <p>
                  Admins
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col">
              <h1 class="m-0">Edit Citizen</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid pb-1">
          <div id="admin-form" class="card">
            <div class="card-header">
              <a class="btn btn-secondary" href="citizens.php">Cancel</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="email" class="form-label">Email</label>
                  <input class="form-control" type="email" name="email" id="email" placeholder="Email"
                    value="<?php echo $email; ?>">
                </div>

                <div class="form-group col-md-6">
                  <label for="password" class="form-label">Password</label>
                  <input class="form-control" type="password" name="password" id="password" placeholder="Password"
                    value="<?php echo $password; ?>">
                </div>

                <div class="form-group col-md-6">
                  <label for="confirm-password" class="form-label">Confirm Password</label>
                  <input class="form-control" type="password" name="confirm-password" id="confirm-password"
                    placeholder="Confirm Password" value="<?php echo $password; ?>">
                </div>

                <div class="form-group col-12">
                  <label for="first-name" class="form-label">First Name</label>
                  <input class="form-control" type="text" name="first-name" id="first-name" placeholder="First Name"
                    value="<?php echo $firstName; ?>">
                </div>

                <div class="form-group col-md-6">
                  <label for="middle-name" class="form-label">Middle Name</label>
                  <input class="form-control" type="text" name="middle-name" id="middle-name" placeholder="Middle Name"
                    value="<?php echo $middleName; ?>">
                </div>

                <div class="form-group col-md-6">
                  <label for="last-name" class="form-label">Last Name</label>
                  <input class="form-control" type="text" name="last-name" id="last-name" placeholder="Last Name"
                    value="<?php echo $lastName; ?>">
                </div>

                <div class="form-group pt-3 col">
                  <div id="edit-citizen-button" class="btn btn-primary" edit-id="<?php echo $citizenId; ?>">Save Changes
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        All content is for learning and demonstration purposes.
      </div>
      <!-- Default to the left -->
      <strong>&copy; 2025.</strong> For educational purposes.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="../assets/js/jquery.min.js"></script>
  <!-- Bootstrap 5 -->
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables & Plugins -->
  <script src="../assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../assets/adminlte/plugins/jszip/jszip.min.js"></script>
  <script src="../assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../assets/adminlte/js/adminlte.min.js"></script>
  <!-- Custom CSS -->
  <script src="./js/script.js"></script>
</body>

</html>