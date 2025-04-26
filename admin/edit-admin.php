<?php include_once './includes/auth-check.php'; ?>
<?php include './includes/header.php'; ?>
<?php 
  if (!isset($_GET['id'])) {
    echo "Intruder!";
    exit();
  }

  $adminId = $_GET['id'];

  include '../connection/connection.php';

  $qry = mysqli_query($con,
  "SELECT * FROM admins
  WHERE admin_id = '$adminId'");

  $row = mysqli_fetch_array($qry);

  $username = $row['username'];
  $password = $row['password'];
  $firstName = $row['first_name'];
  $middleName = $row['middle_name'];
  $lastName = $row['last_name'];
  $role = $row['role_id'];
?>

            <main class="id-applications-main p-2">
              <button type="button" class="btn btn-primary mb-3" 
              onclick="location.href='./admins.php'">
                <i class="bi bi-arrow-return-left pe-1"></i>
                Cancel
              </button>

              <div class="add-admin-form d-flex flex-wrap px-3 py-4 rounded shadow-lg">
                <h1 class="fs-2 pb-3">Edit Admin Details</h1>

                <div class="d-flex flex-wrap flex-md-nowrap flex-grow-1">
                  <input class="form-control mb-3 me-md-2" type="text" name="username" id="username" value="<?php echo $username; ?>" placeholder="Username">

                  <input class="form-control mb-3 ms-md-2" type="password" name="password" id="password" value="<?php echo $password; ?>" placeholder="Password">
                </div>

                <input class="form-control mb-3" type="password" name="confirm-password" value="<?php echo $password; ?>" id="confirm-password" placeholder="Confirm Password">

                <div class="d-flex flex-wrap flex-md-nowrap flex-grow-1">
                  <input class="form-control mb-3 me-md-2" type="text" name="first-name" id="first-name" value="<?php echo $firstName; ?>" placeholder="First Name">

                  <input class="form-control mb-3 ms-md-2" type="text" name="middle-name" id="middle-name" value="<?php echo $middleName; ?>" placeholder="Middle Name">
                </div>

                <input class="form-control mb-3" type="text" name="last-name" id="last-name" value="<?php echo $lastName; ?>" placeholder="Last Name">

                <select class="form-select mb-3" name="role" id="role">
                  <option value="" selected disabled>Role</option>
                  <option value="1" <?php echo $role === "1" ? "selected" : ""; ?>>Super Admin</option>
                  <option value="2" <?php echo $role === "2" ? "selected" : ""; ?>>Admin</option>
                </select>

                <button id="edit-admin-button" class="btn btn-primary mt-3" type="button" edit-id="<?php echo $adminId; ?>">
                  <i class="bi bi-person-fill-add pe-1"></i>
                  Save Changes
                </button>
              </div>
            </main>
<?php include './includes/footer.php'; ?>