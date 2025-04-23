<?php include_once './includes/auth-check.php'; ?>
<?php include './includes/header.php'; ?>

            <main class="id-applications-main p-2">
              <button type="button" class="btn btn-primary">Add Admin</button>

              <div class="table-responsive">
                <table class="table-list table table-striped table-hover" style="width:100%">
                  <thead>
                    <tr class="text-nowrap">
                      <th class="text-start">ID</th>
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
                      "SELECT roles.*, admins.*
                      FROM admins
                      JOIN roles
                      ON admins.role_id = roles.id");

                      while ($row = mysqli_fetch_array($qry)) {
                    ?>

                      <tr class="text-nowrap">
                        <td class="text-start">
                          <?php echo $row['id']; ?>
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
                          <?php echo $row['role']; ?>
                        </td>
                        <td class="text-start">
                          <?php echo $row['created_at']; ?>
                        </td>
                        <td class="text-start">
                          <?php echo $row['updated_at']; ?>
                        </td>
                        <td>
                          <button class="btn btn-secondary">Edit</button>

                          <!-- Button to trigger delete confirmation modal -->
                          <button class="confirm-delete btn btn-danger" 
                          data-bs-toggle="modal" 
                          data-bs-target="#deleteModal">Delete</button>

                          <!-- Delete confirmation modal -->
                          <div class="modal fade"
                          id="deleteModal"
                          data-bs-theme="dark"
                          data-bs-backdrop="static"
                          data-bs-keyboard="false"
                          tabindex="-1"
                          aria-labelledby="deleteModalLabel"
                          aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content bg-danger-subtle">
                                <div class="modal-header">
                                  <!-- Modal title -->
                                  <h1 class="modal-title fs-5"
                                  id="deleteModalLabel">
                                    Delete Confirmation
                                  </h1>

                                  <button type="button" 
                                  class="btn-close" 
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                                </div>
                                <!-- Message confirmation, modal body -->
                                <div class="modal-body">
                                  Are you sure you want to delete this admin? <br>
                                  This action cannot be undone.
                                </div>
                                <div class="modal-footer">
                                  <!-- Cancel button -->
                                  <button type="button" 
                                  class="btn btn-secondary" 
                                  data-bs-dismiss="modal">Cancel</button>

                                  <!-- Real delete button -->
                                  <button type="button"
                                  class="delete-admin btn btn-danger"
                                  id="<?php echo $row['id']; ?>">Continue</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End of delete confirmation modal -->

                          <!-- Success modal -->
                          <div class="modal fade" data-bs-theme="dark" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content text-white bg-success-subtle">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="successModalLabel">Deleted!</h5>
                                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Admin was successfully deleted.
                                </div>
                                <div class="modal-footer">
                                <button type="button" 
                                  class="btn btn-secondary" 
                                  data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End of success modal -->
                        </td>
                      </tr>

                    <?php } ?>
                  </tbody>
                </table>
              </div>

              

            </main>

<?php include './includes/footer.php'; ?>