<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class College_Model extends CI_Model {

    public function get_ospos_divisions() {

        $this->db->select('*');
        $this->db->from('ospos_divisions');

        $queryResult = $this->db->get();
        $result = $queryResult->result();
        return $result;
    }

    public function get_ospos_districts() {

        $this->db->select('*');
        $this->db->from('ospos_districts');

        $queryResult = $this->db->get();
        $result = $queryResult->result();
        return $result;
    }

    public function get_ospos_upazilas() {

        $this->db->select('*');
        $this->db->from('ospos_upazilas');

        $queryResult = $this->db->get();
        $result = $queryResult->result();
        return $result;
    }

    public function save_registration_info() {

        $data = array();

        $data['college_name'] = $this->input->post('college_name', true);
        $data['registration_number'] = $this->input->post('registration_number', true);
        $data['email'] = $this->input->post('email', true);
        $data['division_id'] = $this->input->post('division_id', true);
        $data['district_id'] = $this->input->post('district_id', true);
        $data['upazila_id'] = $this->input->post('upazila_id', true);
        $data['address'] = $this->input->post('address', true);
        $data['phone'] = $this->input->post('phone', true);
        //$data['status'] = $this->input->post('status', true);
        //$data['approved_by'] = $this->input->post('approved_by', true);
        //$data['added_by'] = $this->input->post('added_by', true);

        $time = date('Y-m-d g:i:s', time());

        $data['created_at'] = $time;
        $data['updated_at'] = $time;

        /** PASSWORD GENERATION */
        $password = time();
        
        $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        
        /** EPIN NUMBER GENERATION */
        $this->db->select('*');
        $this->db->from('collages');
        $this->db->where('district_id',$this->input->post('district_id'));
        $query = $this->db->get();
        $college_count = $query->num_rows() + 1;

        if($this->digit_count($college_count) == 1){
            $college_count = '0'.$college_count;
        }
        
        $district_id = $this->input->post('district_id',true);
        
        if($this->digit_count($district_id) == 1){
            $district_id = '0'.$district_id;
        }
        
        $epin_number = trim(date('y').$district_id.$college_count);
        
        $data['epin_number'] = $epin_number;

        $this->db->insert('collages', $data);
        
        $data['r_password'] = $password;
        
        return $data;
    }
    
    public function digit_count($number){
        
        $digit_count = preg_match_all( '/[0-9]/', $number);
        
        return $digit_count;
    }
    
    public function check_login_info($epin_number,$password){
        
        $this->db->select('*');
        $this->db->from('collages');
        $this->db->where('epin_number',$epin_number);
        //$this->db->where('password',$password);
        
        $query_result=$this->db->get();
        $result=$query_result->row();
        
        //$pass = $result['password'];
        
        $is_authenticate = password_verify($password, $result->password);
        if($is_authenticate == 1){
            return $result;
        } else {
            return FALSE;
        }
        
        
    }
}
