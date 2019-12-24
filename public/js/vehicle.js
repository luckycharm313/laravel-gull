$(function () {
  $('#datepicker').datepicker({
    format: 'dd/mm/yyyy',
    uiLibrary: 'bootstrap4'
  });
  $("#vehicleForm").validate({
    rules: {
      weight: {
        digits: true,
      }
    }
  });
});