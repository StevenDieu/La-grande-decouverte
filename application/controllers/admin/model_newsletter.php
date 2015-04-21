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
        $id = $this->input->get('id');
        $this->newsletter->deleteNewsletter($id);

        redirect('admin/newsletters/liste', 'refresh');
    }

    public function edit() {
        $this->form_validation->set_rules('mail', 'mail', 'trim|xss_clean');
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            $mail = $this->input->post('mail');
            $id = $this->input->post('id');
            $result = $this->newsletter->editNewsletter($id, $mail);
            redirect('admin/newsletters/liste', 'refresh');
        }
    }

    public function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mail', 'mail', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            $mail = $this->input->post('mail');
            $data = $this->newsletter->ajouterNewsletter($mail);
            $this->load->library('session');
            $this->session->set_flashdata('result_newsletter',$data);
            redirect('pages/index', 'refresh');
        }
    }

}
