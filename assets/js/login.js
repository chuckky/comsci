$(document).ready(function() {
  var base_url = "http://comsci.local/";
  var student_id = $("#student_id");
	var student_password = $("#student_password");

  $("#btnLogin").click(function() {
    if(student_id.val() == "") {
      alert("No student_id");
      student_id.focus();
    } else if(student_password.val() == "") {
      alert("No student_password");
      student_password.focus();
    } else {
      $.ajax({
        url: base_url + "Member/login",
        method: "POST",
        data: $("#frmLogin").serialize()
      }).done(function(msg) {
        if(msg == "Invalid Student ID") {
          alert("Invalid Student ID");
          window.reload();
        } else if(msg == "Invalid password") {
          alert("Invalid password");
        } else if(msg == "Yes") {
          alert("Login Success");
          window.location.href = base_url;
        }
      });
    }
  });
});
