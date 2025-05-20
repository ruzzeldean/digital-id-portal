<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital ID Portal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="wrapper index-wrapper">
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid px-0">
            <a class="navbar-brand" href="./">Digital ID Portal</a>
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
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">How to Apply?</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                      Account
                      <i class="bi bi-person"></i></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./login.php">Login</a></li>
                      <li><a class="dropdown-item" href="./register.php">Register</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <div class="container">
        main
      </div>
    </main>
    <footer>
      <div class="container">
        footer
      </div>
    </footer>
  </div>
  <script src="./assets/js/jquery.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>