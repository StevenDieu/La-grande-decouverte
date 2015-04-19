<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_continent extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('voyage');
    }

    public function save(){
        $this->load->library('form_validation');

        //information générale
        $this->form_validation->set_rules('name', 'name', 'trim|xss_clean');


        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            //information générale
            $name = $this->input->post('name');
            $result = $this->voyage->addContinent($name);

            redirect('admin/continent/liste', 'refresh');
        }

    }

    public function edit(){
        $this->load->library('form_validation');

        //information générale
        $this->form_validation->set_rules('name', 'name', 'trim|xss_clean');
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');


        if ($this->form_validation->run() == FALSE) {
            $this->load->templateUser('page_inscription');
        } else {
            //information générale
            $name = $this->input->post('name');
            $id = $this->input->post('id');

            $result = $this->voyage->editContinent($id,$name);

            redirect('admin/continent/liste', 'refresh');
        }

    }

    public function delete(){
            $id = $this->input->get('id');

            $result = $this->voyage->deleteContinent($id);

            redirect('admin/continent/liste', 'refresh');
    }
}
