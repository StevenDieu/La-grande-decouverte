<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pages extends CI_Controller {

    /**
     * 
     */
    public function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['user'];
            $data['logger'] = true;
            $this->load->templatePages('home', $data);
        } else {
            $this->load->helper(array('form'));
            $data['logger'] = false;
            $this->load->templatePages('home', $data);
        }
    }

    public function contact() {
        $data['css'] = "contact";
        $this->load->templatePages('contact', $data);
    }

}
