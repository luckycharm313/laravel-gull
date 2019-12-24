$(document).ready(function () {
  $("#addForm").validate({
    rules: {
      phone1: {
        digits: true,
      },
      phone2: {
        digits: true,
      }
    }
  });
});