$(document).ready(function () {
  $("#appointmentForm").submit(function (e) {
    e.preventDefault(); // prevent page reload

    $.ajax({
      url: "submit.php",
      type: "POST",
      data: $(this).serialize(),
      success: function (response) {
        $("#response").html(response);
        $("#appointmentForm")[0].reset();
      },
      error: function () {
        $("#response").html("<span style='color:red;'>An error occurred. Please try again.</span>");
      }
    });
  });
});
