<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Digital ID Portal</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap-icons/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../assets/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="../assets/css/buttons.bootstrap5.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="wrapper">
      <div class="container-fluid">
        <div class="row min-vh-100">
          <div class="col-2 col-sm-3 col-xl-2 bg-dark">
            <div class="sticky-top">
              <nav class="navbar bg-dark border-bottom border-white mb-3" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand text-nowrap" href="#">
                    <i class="bi bi-person-fill-lock"></i>  
                    <span class="d-none d-sm-inline ms-2">ADMIN</span>
                  </a>
                </div>
              </nav>

              <nav class="nav flex-column">
                <a id="dashboard-link" class="nav-link text-white text-nowrap" href="./dashboard.php">
                  <i class="bi bi-speedometer"></i>
                  <span class="d-none d-sm-inline ms-2">Dashboard</span>
                </a>
                <a id="id-applications-link" class="nav-link text-white text-nowrap" href="./id-applications.php">
                  <i class="bi bi-person-vcard"></i>
                  <span class="d-none d-sm-inline ms-2">ID Applications</span>
                </a>
                <a id="admins-link" class="nav-link text-white text-nowrap" href="./admins.php">
                  <i class="bi bi-person-lines-fill"></i>
                  <span class="d-none d-sm-inline ms-2">Admins</span>
                </a>
              </nav>
            </div>
          </div>

          <div class="col-10 col-sm-9 col-xl-10 p-0 m-0">
            <nav class="navbar navbar-expand-lg bg-body-tertiary mb-2 shadow-sm">
              <div class="container-fluid">
                <ul class="navbar-nav">
                  <li>
                    <h3 id="page-title" class="m-0">Dashboard</h3>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="./">
                      <i class="bi bi-box-arrow-right me-2"></i>
                      LOGOUT
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
            