<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('user');
    }

    public function liste() {
        $data["customers"] = $this->user->getUsers();
        $this->load->templateAdmin('customer/list_customer',$data);
    }

    public function edit() {
        if (!$this->input->get('id')) {
            redirect('admin/customer/liste', 'refresh');
        }
        $this->user->setId($this->input->get('id'));
        $data["customer"] = $this->user->getUser();
        $this->load->helper(array('form'));
        $this->load->templateAdmin('customer/edit_customer', $data);
    }



}
