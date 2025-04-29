$(document).on('click', '#login-button', function() {
  const email = $('#email').val();
  const password = $('#password').val();

  if (email.trim() === "") {
    alert("Email is required.");
  } else if (password.trim() === "") {
    alert("Password is required.");
  } else {
    $.ajax({
      url: './login-handler.php',
      method: 'POST',
      data: {
        email: email,
        password: password
      },
      success: function(response) {
        console.log(response)
        if (response == "success") {
          alert("Access Granted.");
          location.href='./dashboard.php';
        } else {
          alert("Access Denied");
        }
      }
    });
  }
});