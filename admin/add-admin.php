<?php include_once './includes/auth-check.php'; ?>
<?php include './includes/header.php'; ?>

            <main class="id-applications-main p-2">
              <button type="button" class="btn btn-primary mb-3" 
              onclick="location.href='./admins.php'">
                <i class="bi bi-arrow-return-left pe-1"></i>
                Back
              </button>

              <div class="add-admin-form d-flex flex-wrap px-3 py-4 rounded shadow-lg">
                <h1 class="fs-2 pb-3">Add New Admin</h1>

                <div class="d-flex flex-wrap flex-md-nowrap flex-grow-1">
                  <input class="form-control mb-3 me-md-2" type="text" name="username" id="username" placeholder="Username">

                  <input class="form-control mb-3 ms-md-2" type="password" name="password" id="password" placeholder="Password">
                </div>

                <input class="form-control mb-3" type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password">

                <div class="d-flex flex-wrap flex-md-nowrap flex-grow-1">
                  <input class="form-control mb-3 me-md-2" type="text" name="first-name" id="first-name" placeholder="First Name">

                  <input class="form-control mb-3 ms-md-2" type="text" name="middle-name" id="middle-name" placeholder="Middle Name">
                </div>

                <input class="form-control mb-3" type="text" name="last-name" id="last-name" placeholder="Last Name">

                <select class="form-select mb-3" name="role" id="role">
                  <option value="" selected disabled>Role</option>
                  <option value="1">Super Admin</option>
                  <option value="2">Admin</option>
                </select>

                <button id="add-admin-button" class="btn btn-primary mt-3" type="button">
                  <i class="bi bi-person-fill-add pe-1"></i>
                  Add New Admin
                </button>
              </div>
            </main>
<?php include './includes/footer.php'; ?>