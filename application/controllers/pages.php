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
            $this->load->templatePages('developpement', $data);
        } else {
            $this->load->helper(array('form'));
            $data['logger'] = false;
            $this->load->templatePages('developpement', $data);
        }
    }

    public function accueil() {
        $data["css"] = "accueil";
        $this->load->templatePages('accueil', $data);
    }

}
