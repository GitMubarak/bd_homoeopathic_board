<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Institute_model extends CI_Model 
{
	
	/*
	* Common select drop down function for any page
	*/
	public function SelectAll()
	{
		$this->db->select("id, college_name");
		$this->db->from('collages');
		$this->db->where('status', 1);
		$q = $this->db->get();    
		if ($q->num_rows() > 0) 
		{
			foreach($q->result() as $row) 
			{
				$data[''] = 'Select One';
				$data[$row->id] = $row->college_name;
			}
			return $data;
		}
	}
	
	/*
	* Function Getting All Data
	*/
	public function ListAll() 
	{
		$this->db->select('*');
		$this->db->from('collages');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	
	/*
	* Function for data insert operation
	*/
	public function DataInsert( $data )
	{
		$result = $this->db->insert('categories', $data);
 
		if($result == 1) 
		{
			return true;
		} 
		else 
		{ 
			return 0; 
		}
	}
	
	/*
	* Function to get one row to display in edit form
	*/
	public function GetSingle( $id )
	{
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('category_id', $id);
		$query = $this->db->get();    
		if($query->num_rows() > 0)
			return $query->row();
	}
	
	
	/*
	* update operation
	*/
	public function DataUpdate( $id, $data )
	{
		$this->db->where('category_id', $id);
		$result = $this->db->update('categories', $data);
		if($result == 1) 
		{
			return true;
		} 
		else 
		{ 
			return 0; 
		}
	}
	
	/*
	* DELETE operation
	*/
	public function DeleteRow( $id )
	{
		$this->db->where('category_id', $id);
 		$this->db->delete('categories');
		return true;
	}
	
	public function getCategoriesWhereIn($id)
	{
		return $this->db->query("SELECT item_category_title FROM item_categories 
     								WHERE item_category_id IN ( $id )")->result_array();
	}
}
?>