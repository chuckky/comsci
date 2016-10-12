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
    <link rel="stylesheet" href="<?php echo base_url("assets/css/register.css") ?>">
    <title>CS</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/register.js"); ?>"></script>
  </head>
  <body cz-shortcut-listen="true">
    <div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Computer Science Siam University</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">
					<form class="form-horizontal" id="frmRegister" method="post" action="">
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">รหัสนักศึกษา</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" maxlength="10" class="form-control" name="student_id" id="student_id"  placeholder="รหัสนักศึกษา" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">รหัสผ่าน</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="student_password" id="student_password"  placeholder="รหัสผ่าน"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">ยืนยันรหัสผ่าน</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="student_confirm_password" id="student_confirm_password"  placeholder="ยืนยันรหัสผ่าน"/>
								</div>
							</div>
						</div>
            <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">คำนำหน้าชื่อ</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-slack fa" aria-hidden="true"></i></span>
                  <select name="student_prefix" id="student_prefix" class="form-control">
                    <option value="">-- เลือกคำนำหน้าชื่อ --</option>
                    <option value="Mr">นาย</option>
                    <option value="Mrs">นางสาว</option>
                  </select>
								</div>
							</div>
						</div>
            <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">เพศ</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-venus-mars fa" aria-hidden="true"></i></span>
                  <select name="student_gender" id="student_gender" class="form-control">
                    <option value="0">-- เลือกเพศ --</option>
                    <option value="M">ชาย</option>
                    <option value="F">หญิง</option>
                  </select>
								</div>
							</div>
						</div>
            <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">ชื่อ</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-slack fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="student_firstname" id="student_firstname"  placeholder="ชื่อ"/>
								</div>
							</div>
						</div>
            <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">นามสกุล</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-slack fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="student_lastname" id="student_lastname"  placeholder="นามสกุล"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">อีเมล์</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="student_email" id="student_email"  placeholder="อีเมล์"/>
								</div>
							</div>
						</div>
            <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">เบอร์โทรศัพท์</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
									<input type="tel" class="form-control" name="student_tel" id="student_tel"  placeholder="เบอร์โทรศัพท์"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<button type="button" id="btnRegister" class="btn btn-primary btn-lg btn-block login-button">ลงทะเบียน</button>
						</div>
						<!-- <div class="login-register">
              <a href="index.php">Login</a>
            </div> -->
					</form>
				</div>
			</div>
		</div>
  </body>
</html>
