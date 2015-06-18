<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_newsletter extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('newsletter');
        $this->load->library('form_validation');
    }

    public function delete() {
        $this->newsletter->setId($this->input->get('id'));
        $this->newsletter->deleteNewsletter();

        redirect('admin/newsletters/index', 'refresh');
    }

    public function edit() {
        $this->form_validation->set_rules('mail', 'mail', 'trim|xss_clean');
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            $this->newsletter->setMail($this->input->post('mail'));
            $this->newsletter->setId($this->input->post('id'));
            $this->newsletter->setStatut($this->input->post('statut'));
            $result = $this->newsletter->editNewsletter();
            redirect('admin/newsletters/index', 'refresh');
        }
    }

}
