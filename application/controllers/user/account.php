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

            $id = $this->session->userdata('logged_in')['id'];
            $this->load->model('user');
            $this->user->setId($id);
        
            $data["allCss"] = array("account");
            $data["user"] = $this->user->get();
            $data["alljs"] = array("account");
            $data["librairieJs"] = array("jquery.Jcrop.min");
            $data["librairieCss"] = array("jquery.Jcrop.min");

            if($data["user"] == ''){
                session_destroy();
                redirect('pages/index', 'refresh');
            }

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

    function myaccount() {
        $id = $this->session->userdata('logged_in')['id'];
        $this->load->model('user');
        $this->user->setId($id);
        $data['user'] = $this->user->get();
        $this->load->helper(array('form'));
        
        if($data["user"] == ''){
            session_destroy();
            redirect('pages/index', 'refresh');
        }
        $this->load->view('user/myaccount', $data);
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
