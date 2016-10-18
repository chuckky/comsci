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
<<<<<<< HEAD:assets/js/student/login.js
        url: base_url + "student/login",
=======
        url: base_url + "Member/login",
>>>>>>> parent of 538ab2b... Change Student:assets/js/login.js
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
<<<<<<< HEAD:assets/js/student/login.js
          window.location.href = base_url + "student";
          //alert(base_url + "member");
=======
          window.location.href = base_url;
>>>>>>> parent of 538ab2b... Change Student:assets/js/login.js
        }
      });
    }
  });
});
