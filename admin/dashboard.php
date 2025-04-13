<?php include './includes/header.php'; ?>

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
              <a class="nav-link text-white text-nowrap" href="#">
                <i class="bi bi-speedometer"></i>
                <span class="d-none d-sm-inline ms-2">Dashboard</span>
              </a>
              <a class="nav-link text-white text-nowrap" href="#">
                <i class="bi bi-person-vcard"></i>
                <span class="d-none d-sm-inline ms-2">Applications</span>
              </a>
              <a class="nav-link text-white text-nowrap" href="#">
                <i class="bi bi-person-lines-fill"></i>
                <span class="d-none d-sm-inline ms-2">Admins</span>
              </a>
            </nav>
          </div>
        </div>

        <div class="col-10 col-sm-9 col-xl-10 p-0 m-0">
          <nav class="navbar navbar-expand-lg bg-body-tertiary mb-2 shadow-sm"> <!-- mb-3 -->
            <div class="container-fluid">
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

          <main class="dashboard-main p-2">
            <h1>Hello Monke</h1>
          </main>

        </div>
      </div>
    </div>
  </div>

<?php include './includes/footer.php'; ?>