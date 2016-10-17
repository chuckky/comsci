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
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-datetimepicker.min.css") ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/insertcoop.css") ?>" />
    <title>CS</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/moment.min.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-datetimepicker.min.js"); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/student/insertcoop.js"); ?>"></script>
  </head>
  <body cz-shortcut-listen="true">
    <div class="container">
      <div class="panel panel-primary dialog-panel">
        <div class="panel-heading">
          <h5>Almaguin Campground - Reservation</h5>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-2" for="student_id">รหัสนักศึกษา</label>
              <div class="col-md-2">
                <input type="text" name="student_id" class="form-control" value="<?php echo $this->session->userdata("student_id"); ?>" readonly />
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-2" for="student_prefix">ชื่อ - นามสกุล</label>
              <div class="col-md-8">
                <div class="col-md-2">
                  <div class="form-group internal">
                    <select class="form-control" id="student_prefix" disabled>
                      <option value="<?php echo $this->session->userdata("student_prefix"); ?>"><?php echo $this->session->userdata("student_prefix"); ?></option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3 indent-small">
                  <div class="form-group internal">
                    <input class="form-control" id="student_firstname" placeholder="ชื่อจริง" type="text" value="<?php echo $this->session->userdata("student_firstname"); ?>" readonly />
                  </div>
                </div>
                <div class="col-md-3 indent-small">
                  <div class="form-group internal">
                    <input class="form-control" id="student_lastname" placeholder="นามสกุล" type="text" value="<?php echo $this->session->userdata("student_lastname"); ?>" readonly />
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-2" for="student_email">อีเมล์</label>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-11">
                    <input class="form-control" id="student_email" placeholder="อีเมล์" type="email" value="<?php echo $this->session->userdata("student_email"); ?>" />
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-2" for="student_tel">เบอร์โทรศัพท์</label>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-11">
                    <input class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="student_tel" placeholder="เบอร์โทรศัพท์" type="tel" value="<?php echo $this->session->userdata("student_tel"); ?>" />
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-2" for="id_adults">Guests</label>
              <div class="col-md-8">
                <div class="col-md-2">
                  <div class="form-group internal">
                    <input class="form-control col-md-8" id="id_adults" placeholder="18+ years" type="number">
                  </div>
                </div>
                <div class="col-md-3 indent-small">
                  <div class="form-group internal">
                    <input class="form-control" id="id_children" placeholder="2-17 years" type="number">
                  </div>
                </div>
                <div class="col-md-3 indent-small">
                  <div class="form-group internal">
                    <input class="form-control" id="id_children_free" placeholder="&lt; 2 years" type="number">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-2" for="id_checkin">Checkin</label>
              <div class="col-md-8">
                <div class="col-md-3">
                  <div class="form-group internal input-group">
                    <input type="text" class="form-control datepicker" id="id_checkin" />
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-calendar"></i>
                    </span>
                  </div>
                </div>
                <label class="control-label col-md-2" for="id_checkout">Checkout</label>
                <div class="col-md-3">
                  <div class="form-group internal input-group">
                    <input type="text" class="form-control datepicker" id="id_checkout">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-calendar"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-2" for="id_equipment">Equipment type</label>
              <div class="col-md-8">
                <div class="col-md-3">
                  <div class="form-group internal">
                    <select class="form-control" id="id_equipment">
                      <option>Travel trailer</option>
                      <option>Fifth wheel</option>
                      <option>RV/Motorhome</option>
                      <option>Tent trailer</option>
                      <option>Pickup camper</option>
                      <option>Camper van</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group internal">
                    <label class="control-label col-md-3" for="id_slide">Slide-outs</label>
                    <div class="make-switch" data-off-label="NO" data-on-label="YES" id="id_slide_switch">
                      <input id="id_slide" type="checkbox" value="chk_hydro">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-2" for="id_service">Required Service</label>
              <div class="col-md-8">
                <select class="multiselect" id="id_service" multiple="multiple">
                  <option value="hydro">Hydro</option>
                  <option value="water">Water</option>
                  <option value="sewer">Sewer</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-2" for="id_pets">Pets</label>
              <div class="col-md-8">
                <div class="make-switch" data-off-label="NO" data-on-label="YES" id="id_pets_switch">
                  <input id="id_pets" type="checkbox" value="chk_hydro">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2 col-md-offset-2" for="id_comments">Comments</label>
              <div class="col-md-6">
                <textarea class="form-control" id="id_comments" placeholder="Additional comments" rows="3"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-4 col-md-3">
                <button class="btn-lg btn-primary" type="submit">Request Reservation</button>
              </div>
              <div class="col-md-3">
                <button class="btn-lg btn-danger" style="float:right" type="submit">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
