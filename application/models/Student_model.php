<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model 
{
	
	/*
	* Function for data insert operation
	*/
	public function DataInsert( $data )
	{
		$result = $this->db->insert('student_info', $data);
		$insert_id = $this->db->insert_id();
		if($result == 1) 
		{
			return $insert_id;
		} 
		else 
		{ 
			return 0; 
		}
	}
	
	public function GetDataByRegistrationNo( $rn ) 
	{
		$this->db->select('*');
		$this->db->from('student_info');
		$this->db->where('registration_no', $rn);
		$query = $this->db->get();   
		if($query->num_rows() > 0)
			return $query->row();
		else return false;
		//return $query->result();
	}
	
	/*
	* Function for data insert operation
	*/
	public function FormFillup( $data )
	{
		$result = $this->db->insert('form_fillup', $data);
		$insert_id = $this->db->insert_id();
		if($result == 1) 
		{
			return $insert_id;
		} 
		else 
		{ 
			return 0; 
		}
	}
	
	public function SelectAllUnregistered( $inst ) 
	{
		$this->db->select('*');
		$this->db->from('student_info');
		$this->db->where('registration_no', '');
		$this->db->where('institute_id', $inst);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function ApproveRegistration( $id, $data ) 
	{
		$this->db->where('id', $id);
		$this->db->update('student_info', $data);
	}
}
?>