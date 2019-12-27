$(document).ready(function () {
  $("#registerForm").validate({
    rules: {
      phone: {
        digits: true,
      },
      confirm_password: {
        equalTo: "#password"
      }
    }
    });
});