<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("student_model");
	}

	public function index() {
		//print_r($this->session->userdata());
		if($this->session->userdata("login") == TRUE) {
			$data["coop"] = $this->student_model->getCoopDataByID("5204800129");

			foreach ($data as $key => $value) {
				if(count($value) > 0) {

				} else {
					$this->load->view("student/insertcoop");
				}
			}

			//$this->load->view("student/main");
		} else {
			redirect(base_url("student/login"));
		}
	}

	public function register() {
		$student_id = $this->input->post("student_id");
		$student_password = $this->input->post("student_password");
		$student_prefix = $this->input->post("student_prefix");
		$student_gender = $this->input->post("student_gender");
		$student_firstname = $this->input->post("student_firstname");
		$student_lastname = $this->input->post("student_lastname");
		$student_email = $this->input->post("student_email");
		$student_tel = $this->input->post("student_tel");

		if($this->input->post()) {
			$this->student_model->register($student_id,$student_password,$student_prefix,$student_gender,$student_firstname,$student_lastname,$student_email,$student_tel);
		} else {
			$this->load->view("student/register");
		}
	}

	public function login() {
		$student_id = $this->input->post("student_id");
		$student_password = $this->input->post("student_password");

		if($this->input->post()) {
			$data["login"] = $this->student_model->login($student_id,$student_password);

			foreach($data as $key => $login) {
          if($student_id != $login["student_id"]) {
              echo "Invalid Student ID";
          } else if($student_password != $login["student_password"]) {
              echo "Invalid password";
          } else {
              $login_data = array(
								"student_id" => $login["student_id"],
								"student_prefix" => $login["student_prefix"],
								"student_firstname" => $login["student_firstname"],
								"student_lastname" => $login["student_lastname"],
								"student_email" => $login["student_email"],
								"student_tel" => $login["student_tel"],
								"student_gender" => $login["student_gender"],
								"login" => TRUE
							);
              $login_session = $this->session->set_userdata($login_data);
              echo "Yes";
          }
				}
		} else {
				$this->load->view("student/login");
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
