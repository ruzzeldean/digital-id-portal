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
    <main class="main-form d-flex justify-content-center align-items-center p-3 py-5 py-sm-3">
    <div class="register-form bg-light border shadow rounded d-flex flex-column p-4">
        <h1 class="h1 mb-1">Register</h1>
        <p class="mb-4">for new user</p>

        <div class="d-flex flex-wrap flex-md-nowrap flex-grow-1 column-gap-3">
          <div class="flex-grow-1">
            <label for="email" class="form-label">Email</label>
            <input class="form-control mb-3" type="email" name="email" id="email" placeholder="Your email">
          </div>

          <div class="flex-grow-1">
            <label for="password" class="form-label">Password</label>
            <input class="form-control mb-3" type="password" name="password" id="password" placeholder="Your password">
          </div>
        </div>

        <div class="d-flex flex-wrap flex-md-nowrap flex-grow-1 column-gap-3">
          <div class="flex-grow-1">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input class="form-control mb-3" type="password" name="confirm-password" id="confirm-password" placeholder="Confirm your password">
          </div>

          <div class="flex-grow-1">
            <label for="first-name" class="form-label">First Name</label>
            <input class="form-control mb-3" type="text" name="first-name" id="first-name" placeholder="Your first name">
          </div>
        </div>

        <div class="d-flex flex-wrap flex-md-nowrap flex-grow-1 column-gap-3">
          <div class="flex-grow-1">
            <label for="middle-name" class="form-label">Middle Name</label>
            <input class="form-control mb-3" type="text" name="middle-name" id="middle-name" placeholder="Your middle name">
          </div>

          <div class="flex-grow-1">
            <label for="last-name" class="form-label">Last Name</label>
            <input class="form-control mb-3" type="text" name="last-name" id="last-name" placeholder="Your last name">
          </div>
        </div>

        <button id="register-button" class="btn btn-primary mb-3 mt-3">
          Register
          <i class="bi bi-person-plus ms-1 d-inline-block align-text-top"></i>
        </button>
        <p class="text-center mb-2">Already have an account? <a href="./login.php">Log in</a></p>
      </div>
    </main>
  </div>
  <script src="./assets/js/jquery.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>