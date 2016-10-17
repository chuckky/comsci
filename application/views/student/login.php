<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Website Font style -->
    <link rel="stylesheet" href="https://use.fontawesome.com/3880fbd06e.css" />
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css") ?>" />
    <title>CS</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/student/login.js"); ?>"></script>
  </head>
  <body cz-shortcut-listen="true">
    <div class="top-content">
      <div class="inner-bg">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 form-box">
                      <div class="form-top">
                          <div class="form-top-left">
                              <h1><strong>เข้าสู่ระบบ</strong></h1>
                          </div>
                          <div class="form-top-right">
                              <i class="fa fa-key"></i>
                          </div>
                      </div>
                      <div class="form-bottom">
                          <form role="form" action="" method="post" class="login-form" id="frmLogin">
                              <div class="form-group">
                                  <div class="input-group">
                                      <label class="sr-only" for="form-username">รหัสนักศึกษา</label>
                                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                      <input type="text" id="student_id" name="student_id" placeholder="รหัสนักศึกษา" class="form-username form-control" autocomplete="off" maxlength="10" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <label class="sr-only" for="form-password">Password</label>
                                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                      <input type="password" id="student_password" name="student_password" placeholder="รหัสผ่าน" class="form-password form-control" autocomplete="off" maxlength="10" />
                                  </div>
                              </div>
                              <button type="button" class="btn btn-success" id="btnLogin">เข้าสู่ระบบ</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </body>
</html>
