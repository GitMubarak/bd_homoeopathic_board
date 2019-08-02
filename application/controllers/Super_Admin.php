<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Super_Admin extends CI_Controller {

	public function __Construct()
	{
		parent::__Construct ();
		$this->load->model('Institute_model');
		$this->load->model('Student_model');
	}

    public function index() {
        $data = array();
        $data['title'] = 'Home';
        $data['admin_home'] = $this->load->view('Admin/admin_home', $data, true);
        $this->load->view('Admin/admin_master', $data);
    }

    public function student_admission() {
        $data = array();
        $data['title'] = 'Student Admission';
		$data['institutes'] 	= $this->Institute_model->SelectAll();
        $data['admin_home'] = $this->load->view('Admin/Student/student_admission', $data, true);
        $this->load->view('Admin/admin_master', $data);
    }
	
	public function student_registration_approve() {
		
		$inst = $this->input->post('institute_id');
		
		if(!empty($inst)) {
			$data = array();
			$data['title'] = 'Student Registration Approve';
			$data['institute'] = $inst;
			$data['institutes'] = $this->Institute_model->SelectAll();
			$data['students'] = $this->Student_model->SelectAllUnregistered($inst);
			$data['admin_home'] = $this->load->view('Admin/Student/student_registration_approve', $data, true);
			$this->load->view('Admin/admin_master', $data);
		} else {
		   	$data = array();
			$data['title'] = 'Student Registration Approve';
			$data['institutes'] = $this->Institute_model->SelectAll();
			$data['admin_home'] = $this->load->view('Admin/Student/student_registration_approve', $data, true);
			$this->load->view('Admin/admin_master', $data);
		}
    }

    public function first_year_student_topsheet() {
        $data = array();
        $data['title'] = 'First Year Student Top Sheet';
        $data['admin_home'] = $this->load->view('Admin/Student/first_year_student_topsheet', $data, true);
        $this->load->view('Admin/admin_master', $data);
    }

    public function list_of_student_year_wise() {
        $data = array();
        $data['title'] = 'List Of Student(Year Wise)';
        $data['admin_home'] = $this->load->view('Admin/Manage_Student/list_of_student_year_wise', $data, true);
        $this->load->view('Admin/admin_master', $data);
    }

    public function student_registration_card() {
        $data = array();
        $data['title'] = 'Student Registration Card';
        $data['admin_home'] = $this->load->view('Admin/Manage_Student/student_registration_card', $data, true);
        $this->load->view('Admin/admin_master', $data);
    }
    
    public function profile($college_id) {
        $data = array();
        $data['title'] = 'College Profile';
        $data['college_info_byid'] = $this->Super_Admin_Model->get_college_info_byid($college_id);
        
        $data['admin_home'] = $this->load->view('Admin/College/Profile', $data, true);
        $this->load->view('Admin/admin_master', $data);
    }
	
	public function student_form_fillup() {
        $data = array();
        $data['title'] = 'Home';
        $data['admin_home'] = $this->load->view('Admin/student/form_fillup', $data, true);
        $this->load->view('Admin/admin_master', $data);
    }

}
