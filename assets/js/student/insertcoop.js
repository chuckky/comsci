$(document).ready(function() {
  $("#id_checkin").datetimepicker({
    showTodayButton: true,
    viewMode: 'days',
    format: 'DD/MM/YYYY'
  });

  $("#id_checkout").datetimepicker({
    showTodayButton: true,
    viewMode: 'days',
    format: 'DD/MM/YYYY',
    useCurrent: false
  });

  $("#id_checkin").on("dp.change", function (e) {
    $('#id_checkout').data("DateTimePicker").minDate(e.date);
  });

  $("#id_checkout").on("dp.change", function (e) {
    $('#id_checkin').data("DateTimePicker").maxDate(e.date);
  });
});
