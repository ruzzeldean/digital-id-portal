<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital ID Portal</title>
  <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="wrapper">
    <header>
      <div class="container">
        <nav class="navbar">
          <div class="container-fluid px-0">
            <a class="navbar-brand" href="./">Digital ID Portal</a>

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./">
                  <i class="bi bi-house"></i>
                  Home
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <main class="main-form d-flex justify-content-center align-items-center p-3">
    <div class="login-form bg-light border shadow rounded d-flex flex-column p-4">
        <h1 class="h1 mb-1">Log in</h1>
        <p class="mb-4">to your account</p>

        <label for="email" class="form-label">Email</label>
        <input class="form-control mb-3" type="email" name="email" id="email" placeholder="Your email">

        <label for="password" class="form-label">Password</label>
        <input class="form-control mb-4" type="password" name="password" id="password" placeholder="Your password">

        <button id="login-button" class="btn btn-primary mb-3">
          Login
          <i class="bi bi-arrow-right ms-1 d-inline-block align-text-top"></i>
        </button>
        <p class="text-center mb-2">Don't have an account yet? <a href="./register.php">Register</a></p>
      </div>
    </main>
  </div>
  <script src="./assets/js/jquery.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>