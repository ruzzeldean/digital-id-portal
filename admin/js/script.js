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

// Delete admin script
$(document).on('click', '.delete-admin', function () {
  let adminId = $(this).attr('admin-id');

  $.ajax({
    url: './delete-admin.php',
    method: 'POST',
    data: {
      adminId: adminId
    }, success: function(response) {
      // Old style
      /* alert(response);
      location.reload(); */

      // Hide delete confirmation modal
      $('#deleteModal').modal('hide');

      // Show success modal
      $('#successModal').modal('show');

      // Reload page after closing the success modal
      $('#successModal').on('hidden.bs.modal', function () {
        location.reload();
      })
    }
  })
})