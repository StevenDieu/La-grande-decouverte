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
            $this->faq->setQuestion($this->input->post('question'));
            $this->faq->setReponse($this->input->post('reponse'));
            $this->faq->setActive($this->input->post('active'));


            $this->faq->add();

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


            $this->faq->setid($this->input->post('id'));
            $this->faq->setQuestion($this->input->post('question'));
            $this->faq->setReponse($this->input->post('reponse'));
            $this->faq->setActive($this->input->post('active'));

            $this->faq->edit();

            redirect('admin/faqs/liste', 'refresh');
        }
    }

    public function delete() {
        $this->faq->setid($this->input->get('id'));
        $result = $this->faq->delete();

        redirect('admin/faqs/liste', 'refresh');
    }


}
