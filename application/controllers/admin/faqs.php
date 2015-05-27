<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Faqs extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('faq');
    }

    public function add() {
        $this->load->helper(array('form'));
        $this->load->templateAdmin('faq/add');
    }

    public function edit() {
        if (!$this->input->get('id')) {
            redirect('admin/faqs/liste', 'refresh');
        }
        $data["faq"] = $this->faq->get($this->input->get('id'));
        $this->load->helper(array('form'));
        $this->load->templateAdmin('faq/edit', $data);
    }

    public function liste() {
        $data["faqs"] = $this->faq->getAll();
        $this->load->templateAdmin('faq/list', $data);
    }

}
