/* Table script */
$(function () {
  const table = $(".table-list").DataTable({
    responsive: true,
    lengthChange: false,
    autoWidth: false,
    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
  });

  table.buttons().container().appendTo(".dataTables_wrapper .col-md-6:eq(0)");

  $("#statusFilter").on("change", function () {
    const selected = $(this).val();
    const cardTitle = $(".card-title");
    table.column(12).search(selected).draw();

    if (selected === "pending") {
      cardTitle.text("Pending Applications");
    } else if (selected === "approved") {
      cardTitle.text("Approved Applications");
    } else if (selected === "rejected") {
      cardTitle.text("Rejected Applications");
    } else {
      cardTitle.text("ID Applications");
    }
  });
});

// Script for approving ID application
$(document).on("click", "#approve-button", function () {
  if (confirm("Aprrove this application?")) {
    const approveID = $(this).attr("approve-id");
    $.ajax({
      url: "./approve.php",
      method: "POST",
      data: {
        approveID: approveID,
      },
      success: (response) => {
        console.log(approveID);
        alert(response);
        location.reload();
      },
    });
  }
});

// Script for rejecting ID application
$(document).on("click", "#reject-button", function () {
  if (confirm("Reject this application?")) {
    const rejectID = $(this).attr("reject-id");
    $.ajax({
      url: "./reject.php",
      method: "POST",
      data: {
        rejectID: rejectID,
      },
      success: (response) => {
        alert(response);
        location.reload();
      },
    });
  }
});

// Script for modifying citizen
$(document).on("click", "#edit-citizen-button", function () {
  const editId = $(this).attr("edit-id");
  const email = $("#email").val();
  const password = $("#password").val();
  const confirmPassword = $("#confirm-password").val();
  const firstName = $("#first-name").val();
  const middleName = $("#middle-name").val();
  const lastName = $("#last-name").val();
  const role = $("#role").val();

  if (email.trim() === "") {
    alert("Email is required.");
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
  } else {
    $.ajax({
      url: "./update-citizen.php",
      method: "POST",
      data: {
        editId: editId,
        email: email,
        password: password,
        firstName: firstName,
        middleName: middleName,
        lastName: lastName
      },
      success: (response) => {
        alert(response);
        location.reload();
        location.href = "./citizens.php";
      },
    });
  }
});

// Delete citizen script
$(document).on("click", ".delete-citizen-button", function () {
  if (confirm("Are you sure you want to delete this record?")) {
    const citizenId = $(this).attr("citizen-id");

    $.ajax({
      url: "./delete-citizen.php",
      method: "POST",
      data: {
        citizenId: citizenId
      },
      success: function (response) {
        alert(response);
        location.reload();
      }
    });
  }
});

// Script for adding new admin
$(document).on("click", "#add-admin-button", () => {
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
      url: "./save-admin.php",
      method: "POST",
      data: {
        username: username,
        password: password,
        firstName: firstName,
        middleName: middleName,
        lastName: lastName,
        role: role,
      },
      success: (response) => {
        alert(response);
        location.reload();
        location.href = "./admins.php";
      },
    });
  }
});

// Script for editing admin
$(document).on("click", "#edit-admin-button", function () {
  const editId = $(this).attr("edit-id");
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
      url: "./update-admin.php",
      method: "POST",
      data: {
        editId: editId,
        username: username,
        password: password,
        firstName: firstName,
        middleName: middleName,
        lastName: lastName,
        role: role,
      },
      success: (response) => {
        alert(response);
        location.reload();
        location.href = "./admins.php";
      },
    });
  }
});

// Delete admin script
$(document).on("click", ".delete-admin-button", function () {
  if (confirm("Are you sure you want to delete this record?")) {
    const adminId = $(this).attr("admin-id");

    $.ajax({
      url: "./delete-admin.php",
      method: "POST",
      data: {
        adminId: adminId,
      },
      success: function (response) {
        alert(response);
        location.reload();
      }
    });
  }
});
