<?php include_once './includes/auth-check.php' ?>
<?php include './includes/header.php'; ?>

            <main class="id-applications-main p-2">
              <div class="table-responsive">
                <table class="table-list table table-striped table-hover" style="width:100%">
                  <thead>
                    <tr class="text-nowrap">
                      <th class="text-start">Admin ID</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Last Name</th>
                      <th class="text-start">Role ID</th>
                      <th>Role</th>
                      <th class="text-start">Created At</th>
                      <th class="text-start">Updated At</th>
                      <th>Actions</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php 
                      include '../connection/connection.php'; 

                      $qry = mysqli_query($con, 
                      "SELECT admins.*, roles.*
                      FROM admins
                      JOIN roles
                      ON admins.role_id = roles.role_id");

                      while ($row = mysqli_fetch_array($qry)) {
                    ?>

                      <tr class="text-nowrap">
                        <td class="text-start">
                          <?php echo $row['admin_id']; ?>
                        </td>
                        <td>
                          <?php echo $row['username']; ?>
                        </td>
                        <td>
                          <?php echo $row['password']; ?>
                        </td>
                        <td>
                          <?php echo $row['first_name']; ?>
                        </td>
                        <td>
                          <?php echo $row['middle_name']; ?>
                        </td>
                        <td>
                          <?php echo $row['last_name']; ?>
                        </td>
                        <td class="text-start">
                          <?php echo $row['role_id']; ?>
                        </td>
                        <td>
                          <?php echo $row['role_name']; ?>
                        </td>
                        <td class="text-start">
                          <?php echo $row['created_at']; ?>
                        </td>
                        <td class="text-start">
                          <?php echo $row['updated_at']; ?>
                        </td>
                        <td>
                          <button class="btn btn-secondary">Edit</button>
                          <button class="btn btn-danger">Delete</button>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              
            </main>

<?php include './includes/footer.php'; ?>