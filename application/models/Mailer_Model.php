<?php

class Mailer_Model extends CI_Model {

    /**
     
     */
    function send_email($data, $templateName) {
        //echo "<pre>";
        //print_r($data);

        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['from_address'], $data['admin_full_name']);
        $this->email->to($data['to_address']);
        //$this->email->cc($data['cc_address']);
        $this->email->subject($data['subject']);
        $body = $this->load->view('Web/College/' . $templateName, $data, true);
        //for live we do
        //echo $body;
        //exit();
        //for live we do
        $this->email->message($body);
        $this->email->send();
        $this->email->clear();
    }

}
