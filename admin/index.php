<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Digital ID Portal</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
  <div class="wrapper">
    <main class="main-form d-flex justify-content-center align-items-center">
      <div class="login-form bg-light shadow rounded d-flex flex-column p-4">
        <h1 class="mb-4">Login</h1>

        <input class="form-control mb-3" type="text" name="username" id="username" placeholder="Username">

        <input class="form-control mb-3" type="password" name="password" id="password" placeholder="Password">

        <button id="login-button" class="btn btn-primary mb-3">Login</button>
      </div>
    </main>
  </div>

  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script>
    // Login script
    $(document).on('click', '#login-button', function() {
      let username = $("#username").val();
      let password = $("#password").val();

      if (username === "") {
        alert("Username is required.");
      } else if (password === "") {
        alert("Password is required.");
      } else {
        $.ajax({
          url: './login.php',
          method: 'POST',
          data: {
            username: username,
            password: password
          },
          success: function(response) {
            if (response == "success") {
              alert("Access granted.");
              location.href="./dashboard.php";
            } else {
              alert("Access denied.");
            }
          }
        })
      }
    })
  </script>
</body>
</html>