$(document).ready(function() {
  var base_url = "http://comsci.local/";
  var student_id = $("#student_id");
	var student_password = $("#student_password");
  var student_confirm_password = $("#student_confirm_password");
	var student_prefix = $("#student_prefix");
	var student_firstname = $("#student_firstname");
	var student_lastname = $("#student_lastname");
	var student_email = $("#student_email");
	var student_tel = $("#student_tel");
	var student_gender = $("#student_gender");

  $("#student_prefix").change(function() {
    if(student_prefix.val() == "Mr") {
      $("#student_gender option[value='M']").attr("selected","selected");
    } else if(student_prefix.val() == "Mrs") {
      $("#student_gender option[value='F']").attr("selected","selected");
    }
  });

  $("#btnRegister").click(function() {
    if(student_id.val() == "") {
      alert("No student_id");
      student_id.focus();
    } else if(student_password.val() == "") {
      alert("No student_password");
      student_password.focus();
    } else if(student_confirm_password.val() == "") {
      alert("No student_confirm_password");
      student_confirm_password.focus();
    } else if(student_password.val() != student_confirm_password.val()) {
      alert("student_password not match");
      student_password.val("");
      student_confirm_password.val("");
      student_password.focus();
    } else if(student_prefix.val() == "") {
      alert("No student_prefix");
      student_prefix.focus();
    } else if(student_gender.val() == "") {
      alert("No student_gender");
      student_gender.focus();
    } else if(student_firstname.val() == "") {
      alert("No student_firstname");
      student_firstname.focus();
    } else if(student_lastname.val() == "") {
      alert("No student_lastname");
      student_lastname.focus();
    } else if(student_email.val() == "") {
      alert("No student_email");
      student_email.focus();
    } else {
      $.ajax({
        url: base_url + "Member/register",
        method: "POST",
        data: $("#frmRegister").serialize()
      }).done(function(msg) {
        if(msg == "Duplicate") {
          alert("Data Duplicate");
          window.reload();
        } else if(msg == "Success") {
          alert("Register Success");
        } else if(msg == "Unsuccess") {
          alert("Register Unsuccess");
        }
      });
    }
  });
});
