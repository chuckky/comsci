<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
  public function __construct() {
		parent::__construct();
	}

	public function register($student_id,$student_password,$student_prefix,$student_gender,$student_firstname,$student_lastname,$student_email,$student_tel) {
    $check_student_sql = "SELECT * FROM student WHERE student_id=?";
    $check_student_query = $this->db->query($check_student_sql,$student_id);

    if($check_student_query->num_rows() > 0) {
      echo "Duplicate";
    } else {
      $register_sql = "INSERT INTO student(student_id,student_password,student_prefix,student_gender,student_firstname,student_lastname,student_email,student_tel) VALUES(?,?,?,?,?,?,?,?)";
      $register_query = $this->db->query($register_sql,array($student_id,$student_password,$student_prefix,$student_gender,$student_firstname,$student_lastname,$student_email,$student_tel));

      if($register_query) {
        echo "Success";
      } else {
        echo "Unsuccess";
      }
    }
  }

  public function login($student_id,$student_password) {
    $check_login_sql = "SELECT * FROM student WHERE student_id=? AND student_password=?";
    $check_login_query = $this->db->query($check_login_sql,array($student_id,$student_password));

    if($check_login_query->num_rows() > 0) {
      $login_result = $check_login_query->row_array();
    } else {
      $login_result = null;
    }
    return $login_result;
  }

  public function getCoopDataByID($student_id) {
    $sql = "SELECT * FROM coop
            INNER JOIN student ON coop.student_id = student.student_id
            INNER JOIN advisor ON coop.advisor_id = advisor.advisor_id
            INNER JOIN company ON coop.company_id = company.company_id
            WHERE student.student_id=?";
    $query = $this->db->query($sql,$student_id);

    if($query->num_rows() > 0) {
      $result = $query->row_array();
    } else {
      $result = array();
    }
    return $result;
  }
}
