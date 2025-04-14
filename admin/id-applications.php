<?php include './includes/header.php'; ?>

            <main class="id-applications-main p-2">
              <div class="table-responsive">
                <table class="table-list table table-striped table-hover" style="width:100%">
                  <thead>
                    <tr class="text-nowrap">
                      <th class="text-start">Application ID</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Last Name</th>
                      <th class="text-start">Date of Birth</th>
                      <th>Address Line 1</th>
                      <th>Address Line 2</th>
                      <th>City</th>
                      <th>Province</th>
                      <th class="text-start">Zip Code</th>
                      <th>Photo Path</th>
                      <th>Status</th>
                      <th class="text-start">Submitted At</th>
                      <th>Actions</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php 
                      include '../connection/connection.php'; 

                      $qry = mysqli_query($con, 
                      "SELECT citizens.*, digital_id_applications.*
                      FROM citizens
                      JOIN digital_id_applications
                      ON citizens.citizen_id = digital_id_applications.citizen_id;");

                      while ($row = mysqli_fetch_array($qry)) {
                    ?>

                      <tr class="text-nowrap">
                        <td class="text-start">
                          <?php echo $row['application_id']; ?>
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
                          <?php echo $row['date_of_birth']; ?>
                        </td>
                        <td>
                          <?php echo $row['address_line1']; ?>
                        </td>
                        <td>
                          <?php echo $row['address_line2']; ?>
                        </td>
                        <td>
                          <?php echo $row['city']; ?>
                        </td>
                        <td>
                          <?php echo $row['province']; ?>
                        </td>
                        <td class="text-start">
                          <?php echo $row['zip_code']; ?>
                        </td>
                        <td>
                          <?php echo $row['photo_path']; ?>
                        </td>
                        <td>
                          <?php echo $row['status']; ?>
                        </td>
                        <td class="text-start">
                          <?php echo $row['submitted_at']; ?>
                        </td>
                        <td>
                          <button class="btn btn-primary">Approve</button>
                          <button class="btn btn-danger">Reject</button>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              
            </main>

<?php include './includes/footer.php'; ?>