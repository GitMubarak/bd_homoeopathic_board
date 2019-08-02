<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Owner: CompanyName
 *
 * Author: Md. Hossni Mubarak
 *
 * Last Updated: 03/04/2018
 *
 * Description: This controller will generate all operation for Student Table.
 * 				
 */

class Student extends CI_Controller 
{
	
	public $data;
	private $userId;
	
	public function __Construct()
	{
		parent::__Construct ();
		$this->load->model('Student_model');
		
		//$this->userId = $this->session->userdata('logged_in')['user_id'];
	}
	
	/*
	*	This function will display All data in admin panel > student view 
	*/
	public function index() {
		$this->data['students'] = $this->student_model->ListAll();
		$this->load->view('admin/student_list', $this->data);
	}
	
	/*
	*	Function for Insert student data
	*/
	public function Insert() 
	{
		//print_r($_POST);
		$data =	array(	'institute_id' 							=> $this->input->post('institute_id'),
						'student_name' 							=> $this->input->post('student_name'),
						'father_name' 							=> $this->input->post('father_name'),
						'father_profession' 					=> $this->input->post('father_profession'),
						'mother_name' 							=> $this->input->post('mother_name'),
						'guardian_name' 						=> $this->input->post('guardian_name'),
						'relation_with_guardian' 				=> $this->input->post('relation_with_guardian'),
						'gender' 								=> $this->input->post('gender'),
						//'roll' 								=> $this->input->post('roll'),
						'year' 									=> $this->input->post('year'),
						'date_of_birth' 						=> $this->input->post('date_of_birth'),
						'nationality' 							=> $this->input->post('nationality'),
						'religion' 								=> $this->input->post('religion'),
						'parmanent_address' 					=> $this->input->post('parmanent_address'),
						'present_address' 						=> $this->input->post('present_address'),
						'current_working_company_name_address'	=> $this->input->post('current_working_company_name_address'),
						'company_permission' 					=> $this->input->post('company_permission'),
						'mobile' 								=> $this->input->post('mobile'),
						'status' 								=> 1,
						'create_date' 							=> date('Y-m-d H:i:s'),
						'modify_date' 							=> date('Y-m-d H:i:s') );
		$success = $this->Student_model->DataInsert($data);
		if( $success>0 ) 
		{ 
			$this->session->set_flashdata('msg', 'New Student added!<br />');
		}
		else 
		{ 
			$this->session->set_flashdata('msg', 'Error! Please try again!<br />'); 
		}
		redirect( 'student' );
	}
	
	public function LoadStudentInfo( $registrationNo = NULL ) 
	{
		if( $registrationNo == NULL ) 
		{
			echo 'No Registration No!';
		}
		else 
		{
			$results = $this->Student_model->GetDataByRegistrationNo($registrationNo);
			if($results) {
				echo json_encode($results);
			} else {
				$data = array( 'student_name'=>'' );
				echo json_encode($data);
			}
		}
	}
	
	/*
	*	Function for Insert student data
	*/
	public function FormFillup() 
	{
		//print_r($_POST);
		$studentType = $this->input->post('student_type');
		
		if( $studentType == 'old' ) {
			$successFormFillup = $this->InsertFormFillup($_POST);
			if( $successFormFillup>0 ) 
			{ 
				$this->session->set_flashdata('msg', 'Form Fillup Successfull!<br />');
			}
			else 
			{ 
				$this->session->set_flashdata('msg', 'Error! Please try again!<br />'); 
			}
			redirect( 'Super_Admin/student_form_fillup' );
		} else {
			// do the rest
			$dataStudentInfo =	array(	'student_name' 							=> $this->input->post('student_name'),
										'father_name' 							=> $this->input->post('father_name'),
										'father_profession' 					=> $this->input->post('father_profession'),
										'mother_name' 							=> $this->input->post('mother_name'),
										'guardian_name' 						=> $this->input->post('guardian_name'),
										//'relation_with_guardian' 				=> $this->input->post('relation_with_guardian'),
										//'gender' 								=> $this->input->post('gender'),
										'registration_no' 						=> $this->input->post('registration_no'),
										//'year' 									=> $this->input->post('year'),
										//'date_of_birth' 						=> $this->input->post('date_of_birth'),
										'nationality' 							=> $this->input->post('nationality'),
										'religion' 								=> $this->input->post('religion'),
										'parmanent_address' 					=> $this->input->post('parmanent_address'),
										//'present_address' 						=> $this->input->post('present_address'),
										//'current_working_company_name_address'	=> $this->input->post('current_working_company_name_address'),
										//'company_permission' 					=> $this->input->post('company_permission'),
										//'mobile' 								=> $this->input->post('mobile'),
										'status' 								=> 1,
										'create_date' 							=> date('Y-m-d H:i:s'),
										'modify_date' 							=> date('Y-m-d H:i:s') );
			
			$resStudentInfo = $this->Student_model->DataInsert($dataStudentInfo);
			if( $resStudentInfo>0 ) 
			{ 
				$successFormFillup = $this->InsertFormFillup($_POST);
				if( $successFormFillup>0 ) 
				{ 
					$this->session->set_flashdata('msg', 'Form Fillup Successfull!<br />');
				}
				else 
				{ 
					$this->session->set_flashdata('msg', 'Error! Form Fillup!<br />'); 
				}
			}
			else 
			{ 
				$this->session->set_flashdata('msg', 'Error! Student Entry!<br />'); 
			}
			redirect( 'Super_Admin/student_form_fillup' );
		} //} else {
		
	}
	
	public function InsertFormFillup($post) 
	{
		//print_r($post);
		//echo $this->input->post('last_university');
		
		$dataFormFillup = array(	'registration_no' 			=> $this->input->post('registration_no'),
									'last_university' 			=> $this->input->post('last_university'),
									'dhms_exam_name_session' 	=> $this->input->post('dhms_exam_name_session'),
									'dhms_exam_center' 			=> $this->input->post('dhms_exam_center'),
									'dhms_exam_roll' 			=> $this->input->post('dhms_exam_roll'),
									'dhms_exam_year' 			=> $this->input->post('dhms_exam_year'),
									'disqualified_exam_name' 	=> $this->input->post('disqualified_exam_name'),
									'disqualified_exam_center' 	=> $this->input->post('disqualified_exam_center'),
									'disqualified_exam_roll' 	=> $this->input->post('disqualified_exam_roll'),
									'disqualified_exam_year' 	=> $this->input->post('disqualified_exam_year'),
									'disqualified_punishment'	=> $this->input->post('disqualified_punishment'),
									'language' 					=> $this->input->post('language'),
									'academic_language' 		=> $this->input->post('academic_language'),
									'subject_code_1' 			=> $this->input->post('subject_code_1'),
									'subject_code_2' 			=> $this->input->post('subject_code_2'),
									'subject_code_3'			=> $this->input->post('subject_code_3'),
									'subject_code_4' 			=> $this->input->post('subject_code_4'),
									'subject_code_5' 			=> $this->input->post('subject_code_5'),
									'subject_code_6' 			=> $this->input->post('subject_code_6'),
									'status' 					=> 1,
									'create_date' 				=> date('Y-m-d H:i:s'),
									'modify_date' 				=> date('Y-m-d H:i:s') );
		
		return $this->Student_model->FormFillup($dataFormFillup);
		
	}
	
	public function ApproveRegistration() 
	{
		//echo count($_POST['student']);
		//echo '<pre />';
		//print_r($_POST);
		//return true;
		foreach($_POST['student'] as $student) {
			$data = array( 'registration_no' => $this->input->post('registration_no'.$student) );
   			$this->Student_model->ApproveRegistration($student, $data);
		}
		
		redirect( 'Super_Admin/student_registration_approve' );
	}
	
}
?>