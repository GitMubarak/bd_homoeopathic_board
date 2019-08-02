<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_Admin_Model extends CI_Model {
    
    public function get_college_info_byid($college_id){
        $this->db->select('*');
        $this->db->from('collages');
        $this->db->where('id', $college_id);
        
        $query_result = $this->db->get();
        $result = $query_result->row();
        
        //echo '<pre>';
        //print_r($result);
        //exit();
        
        return $result;
    }
    
    
}

