<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  session_destroy();
?>
<?php include './includes/header-without-nav.php'; ?>
  
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

<?php include './includes/footer-without-table-script.php'; ?>