// Script for login
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
          location.href='./citizen/';
        } else {
          alert("Access Denied");
        }
      }
    });
  }
});

// Script for account-registration
$(document).on('click', '#register-button', () => {
  const email = $('#email').val();
  const password = $('#password').val();
  const confirmPassword = $('#confirm-password').val();
  const firstName = $('#first-name').val();
  const middleName = $('#middle-name').val();
  const lastName = $('#last-name').val();

  middleName.trim();

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
      url: './registration-handler.php',
      method: 'POST',
      data: {
        email: email,
        password: password,
        firstName: firstName,
        middleName: middleName,
        lastName: lastName
      },
      success: (response) => {
        alert(response);
        location.reload();
        location.href='./login.php';
      }
    });
  }
});

// Script for id-application
$(document).on('click', '#id-application-button', () => {
  const citizenID = $('#citizen-id').val();
  const dateOfBirth = $('#date-of-birth').val();
  const region = $('#region').val();
  const province = $('#province').val();
  const city = $('#city').val();
  const zipCode = $('#zip-code').val();
  const barangay = $('#barangay').val();
  const streetAddress = $('#street-address').val();
  const photoUpload = $('#photo-upload').val();

  if (dateOfBirth === "") {
    alert("Date of birth is required.");
  } else if (region === null) {
    alert("Region is required.");
  } else if (province === null) {
    alert("Province is required.");
  } else if (city === null) {
    alert("City/Municipality is required.");
  } else if (zipCode === "") {
    alert("Zip code is required.");
  } else if (barangay === "") {
    alert("Barangay is required.");
  } else if (streetAddress === "") {
    alert("Street address is required.");
  } else if (photoUpload === "") {
    alert("Photo is required.");
  } else {
    $.ajax({
      url: './id-application.php',
      method: 'POST',
      data: {
        citizenID: citizenID,
        dateOfBirth: dateOfBirth,
        region: region,
        province: province,
        city: city,
        zipCode: zipCode,
        barangay: barangay,
        streetAddress: streetAddress,
        photoUpload: photoUpload
      },
      success: (response) => {
        alert(response);
        location.reload();
      }
    });
  }
});

$(document).ready(function() {
  $.ajax({
    url: './check-application-status.php',
    method: 'GET',
    dataType: 'json',
    success: function(response) {
      if (response.status === 'not_applied') {
        $('#status-message').addClass('d-none');
        $('#application-form').show();
      } else {
        $('#status-message')
          .removeClass('d-none')
          .addClass('alert-warning')
          .text("Your ID application is " + response.status + ".");
        $('#application-form').hide();
      }
    },
    error: function() {
      $('#status-message')
        .removeClass('d-none')
        .addClass('alert-danger')
        .text("Error checking application status.");
    }
  });
});
