$(document).ready(function () {
  $("#accountForm").validate({
    rules: {
      phone: {
        digits: true,
      }
    }
  });
});