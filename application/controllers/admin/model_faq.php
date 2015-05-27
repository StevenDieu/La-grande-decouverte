<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_faq extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('faq');
        $this->load->library('form_validation');
    }

    public function save() {

        //information générale
        $this->form_validation->set_rules('question', 'question', 'trim|xss_clean|required');
        $this->form_validation->set_rules('reponse', 'reponse', 'trim|xss_clean|required');
        $this->form_validation->set_rules('active', 'active', 'trim|xss_clean|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->templateAdmin('faq/add');
        } else {
            //information générale
            $question = $this->input->post('question');
            $reponse = $this->input->post('reponse');
            $active = $this->input->post('active');


            $this->faq->add($question,$reponse,$active);

            redirect('admin/faqs/liste', 'refresh');
        }
    }



    public function edit() {
        $this->load->library('form_validation');

        //information générale
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean|required');
        $this->form_validation->set_rules('question', 'question', 'trim|xss_clean|required');
        $this->form_validation->set_rules('reponse', 'reponse', 'trim|xss_clean|required');
        $this->form_validation->set_rules('active', 'active', 'trim|xss_clean|required');


        if ($this->form_validation->run() == FALSE) {
            $data["faq"] = $this->faq->get($this->input->post('id'));
            $this->load->templateAdmin('faq/edit',$data);
        } else {


            $id = $this->input->post('id');
            $question = $this->input->post('question');
            $reponse = $this->input->post('reponse');
            $active = $this->input->post('active');

            $this->faq->edit($id,$question,$reponse,$active);

            redirect('admin/faqs/liste', 'refresh');
        }
    }

    public function delete() {
        $id = $this->input->get('id');

        $result = $this->faq->delete($id);

        redirect('admin/faqs/liste', 'refresh');
    }


}
