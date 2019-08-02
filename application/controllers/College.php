<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class College extends CI_Controller {

    public function college_registration() {
        $data = array();
        
        $data['title'] = 'College Registration';
        $data['divisions'] = $this->College_Model->get_ospos_divisions();
        $data['districts'] = $this->College_Model->get_ospos_districts();
        $data['upazilas'] = $this->College_Model->get_ospos_upazilas();

        $data['content'] = $this->load->view('Web/College/College_Form', $data, true);
        $this->load->view('Web/master', $data);
    }

    public function store_registration_info() {
        // preg_match_all('!\d+!','BHY-12452-IUT152', $matches); // SEPARATE DIGIT FROM A STRING
        // $digit = preg_match_all('/[0-9]/',4568955); // COUNT NO. OF DIGIT IN A NUMBER
       
        $this->form_validation->set_rules('college_name', 'College Name', 'required');
        $this->form_validation->set_rules(
                'registration_number', 'Registration Number', 'required|is_unique[collages.registration_number]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
                )
        );

        //$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[collages.email]', array(
            'is_unique' => 'This %s already exists.'
                )
        );
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('division_id', 'Division', 'required');
        $this->form_validation->set_rules('district_id', 'District', 'required');
        $this->form_validation->set_rules('upazila_id', 'Upazila', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'College Registration';
            $data['divisions'] = $this->College_Model->get_ospos_divisions();
            $data['districts'] = $this->College_Model->get_ospos_districts();
            $data['upazilas'] = $this->College_Model->get_ospos_upazilas();

            $data['content'] = $this->load->view('Web/College/College_Form', $data, true);
            $this->load->view('Web/master', $data);
        } else {
            
            
            $var = $this->College_Model->save_registration_info();
            /*
             * Start Send Email
             */
            $mail = $var['email'];
            $name = $var['college_name'];
            $password = $var['r_password'];
            $epin_number = $var['epin_number'];
            $mdata['from_address'] = "admin@bd_homoeopathic_board.com";
            $mdata['admin_full_name'] = "bd_homoeopathic_board";
            $mdata['to_address'] = $mail;
            $mdata['subject'] = "Successfull Registration ";
            $mdata['name'] = $name;
            $mdata['password'] = $password;
            $mdata['epin_number'] = $epin_number;
            $this->Mailer_Model->send_email($mdata, 'Registration_Complete_Email');
            /*
             * End Send Email
             */


            $sdata = array();
            $sdata['message'] = "Registration info save successfully. An email has sent to your mail address which contain your Password $password and Epin Number $epin_number.";
            $this->session->set_userdata($sdata);
            return redirect('College/college_registration');
        }
    }
    
    public function college_login() {
        $data = array();
        $data['title'] = 'College Login';
        $data['content'] = $this->load->view('Web/College/College_Login', $data, true);
        $this->load->view('Web/master', $data);
    }
    public function login() {

        $epin_number = $this->input->post('epin_number', true);
        
        $password = $this->input->post('password', true);
        
        $login_info = $this->College_Model->check_login_info($epin_number, $password);
        
        $sdata = array();

        if ($login_info) {
            $sdata['id'] = $login_info->id;
            $sdata['college_name'] = $login_info->college_name;
            $college_name = $sdata['college_name'];
            $sdata['message'] = "$college_name is successfully Login";
            
            $this->session->set_userdata($sdata);
            redirect('Super_Admin/index');
        } else {

            $sdata['exception'] = "Epin Number Or Password Invalid !";
            $this->session->set_userdata($sdata);
            redirect('College/college_login');
        }        
    }
    
    public function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('college_name');
        
        $sdata = array();
        $sdata['message'] = "College are successfully Logout !";
        $this->session->set_userdata($sdata);
        redirect("College/college_login");
    }
    
    public function college_profile($college_id) {
        $data = array();
        $data['title'] = 'College Profile';
        $data['college_info_byid'] = $this->College_Model->get_college_info_byid($college_id);
        
        $data['content'] = $this->load->view('Web/College/College_Profile', $data, true);
        $this->load->view('Web/master', $data);
    }

}
