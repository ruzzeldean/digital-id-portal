$(document).on('click', '#login-button', function() {
  let username = $("#username").val();
  let password = $("#password").val();

  if (username === "") {
    alert("Username is required.");
  } else if (password === "") {
    alert("Password is required.");
  } else {
    $.ajax({
      url: './login.php',
      method: 'POST',
      data: {
        username: username,
        password: password
      },
      success: function(response) {
        console.log(response);
        if (response == "success") {
          alert("Access granted.");
          location.href="./dashboard.php";
        } else {
          alert("Access denied.");
        }
      }
    })
  }
})