<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cmss extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('cms');
    }

    public function index() {
        $data["cms"] = $this->cms->getAll();
        $this->load->templateAdmin('/cms/cms',$data);
    }

    public function add() {
        $this->load->helper(array('form'));
        $this->load->templateAdmin('cms/add');
    }

    public function edit() {
        if (!$this->input->get('id')) {
            redirect('admin/cmss/liste', 'refresh');
        }
        $data["cms"] = $this->cms->get($this->input->get('id'));
        $this->load->helper(array('form'));
        $this->load->templateAdmin('cms/edit', $data);
    }

}


