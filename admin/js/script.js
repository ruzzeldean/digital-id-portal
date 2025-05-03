// Page title script
$(document).ready(function () {
  $("nav a").on("click", function () {
    localStorage.setItem("lastClicked", this.id);
  });

  const lastClicked = localStorage.getItem("lastClicked");

  if ($("#page-title").length && lastClicked) {
    switch (lastClicked) {
      case "dashboard-link":
        $("#page-title").text("Dashboard");
        break;
      case "id-applications-link":
        $("#page-title").text("ID Applications");
        break;
      case "admins-link":
        $("#page-title").text("Admins");
        break;
      default:
        $("#page-title").text("Page");
    }
  }
});

// Table script
new DataTable('.table-list', {
  layout: {
      topStart: {
          buttons: ['copy', 'excel', 'pdf', 'colvis']
      }
  }
});

// Script for approving ID application
$(document).on('click', '#approve-button', function () {
  if (confirm("Aprrove this application?")) {
    const approveID = $(this).attr('approve-id');
    $.ajax({
      url: './approve.php',
      method: 'POST',
      data: {
        approveID: approveID
      },
      success: (response) => {
        alert(response);
        location.reload();
      }
    });
  }
});

// Script for rejecting ID application
$(document).on('click', '#reject-button', function () {
  if (confirm("Reject this application?")) {
    const rejectID = $(this).attr('reject-id');
    $.ajax({
      url: './reject.php',
      method: 'POST',
      data: {
        rejectID: rejectID
      },
      success: (response) => {
        alert(response);
        location.reload();
      }
    });
  }
});

// Script for adding new admin
$(document).on('click', '#add-admin-button', () => {
  const username = $("#username").val();
  const password = $("#password").val();
  const confirmPassword = $("#confirm-password").val();
  const firstName = $("#first-name").val();
  const middleName = $("#middle-name").val();
  const lastName = $("#last-name").val();
  const role = $("#role").val();

  if (username.trim() === "") {
    alert("Username is required.");
  } else if (password.trim() === "") {
    alert("Password is required.");
  } else if (password.length < 6) {
    alert("Password must be more than 6 characters.");
  } else if (confirmPassword.trim() === "") {
    alert("Confirm password is required.");
  } else if (password.trim() !== confirmPassword.trim()) {
    alert("Password do not match.");
  } else if (firstName.trim() === "") {
    alert("First name is required.");
  } else if (lastName.trim() === "") {
    alert("Last name is required.");
  } else if (role === null) {
    alert("Role is required.");
  } else {
    $.ajax({
      url: './save-admin.php',
      method: 'POST',
      data: {
        username: username,
        password: password,
        firstName: firstName,
        middleName: middleName,
        lastName: lastName,
        role: role
      },
      success: (response) => {
        alert(response);
        location.reload();
        location.href='./admins.php';
      }
    });
  }
});

// Script for editing admin
$(document).on('click', '#edit-admin-button', function() {
  const editId = $(this).attr('edit-id');
  const username = $("#username").val();
  const password = $("#password").val();
  const confirmPassword = $("#confirm-password").val();
  const firstName = $("#first-name").val();
  const middleName = $("#middle-name").val();
  const lastName = $("#last-name").val();
  const role = $("#role").val();

  if (username.trim() === "") {
    alert("Username is required.");
  } else if (password.trim() === "") {
    alert("Password is required.");
  } else if (password.length < 6) {
    alert("Password must be more than 6 characters.");
  } else if (confirmPassword.trim() === "") {
    alert("Confirm password is required.");
  } else if (password.trim() !== confirmPassword.trim()) {
    alert("Password do not match.");
  } else if (firstName.trim() === "") {
    alert("First name is required.");
  } else if (lastName.trim() === "") {
    alert("Last name is required.");
  } else if (role === null) {
    alert("Role is required.");
  } else {
    $.ajax({
      url: './update-admin.php',
      method: 'POST',
      data: {
        editId: editId,
        username: username,
        password: password,
        firstName: firstName,
        middleName: middleName,
        lastName: lastName,
        role: role
      },
      success: (response) => {
        alert(response);
        location.reload();
        location.href='./admins.php';
      }
    });
  }
});

// Delete admin script
$(document).on('click', '.delete-admin', function() {
  const adminId = $(this).attr('admin-id');

  $.ajax({
    url: './delete-admin.php',
    method: 'POST',
    data: {
      adminId: adminId
    }, success: function() {
      // Old style
      /* alert(response);
      location.reload(); */

      // Hide delete confirmation modal
      $('#deleteModal').modal('hide');

      // Show success modal
      $('#successModal').modal('show');

      // Reload page after closing the success modal
      $('#successModal').on('hidden.bs.modal', () => {
        location.reload();
      })
    }
  });
});