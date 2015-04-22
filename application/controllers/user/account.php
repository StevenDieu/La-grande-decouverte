<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['user'];
            $data["allCss"] = array("account");
            $data["alljs"] = array("account");
            $this->load->templateUser('account', $data);
        } else {
            redirect('user/account/connexion', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('', 'refresh');
    }

    function connexion() {
        $this->load->helper(array('form'));
        $this->load->templateUser('page_connexion');
    }

    function inscription() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mail', 'mail', 'trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->helper(array('form'));
            $this->load->templateUser('page_inscription');
        } else {
            $data['mail'] = $this->input->post('mail');
            $this->load->helper(array('form'));
            $this->load->templateUser('page_inscription', $data);
        }
    }

}
