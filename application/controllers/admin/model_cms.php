<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_cms extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('cms');
        $this->load->library('form_validation');
    }

    public function save() {

        //information générale
        $this->form_validation->set_rules('code', 'code', 'trim|xss_clean|required|callback_check_code|callback_check_code_exist');
        $this->form_validation->set_rules('label', 'label', 'trim|xss_clean|required');
        $this->form_validation->set_rules('value', 'value', 'trim|xss_clean|required');
        $this->form_validation->set_rules('active', 'active', 'trim|xss_clean|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->templateAdmin('cms/add');
        } else {
            $this->cms->setCode($this->input->post('code'));
            $this->cms->setLabel($this->input->post('label'));
            $this->cms->setValue($this->input->post('value'));
            $this->cms->setActive($this->input->post('active'));
            $this->cms->add();

            redirect('admin/cmss/index', 'refresh');
        }
    }

    function check_code($code) {
        $regex = '/^([a-z_])+$/';

        if(preg_match($regex, $code)){
            return true;
        }else{
            $this->form_validation->set_message('check_code','Le code doit contenir seulement des caractères minuscules ou des "_".');
            return false;
        }
    }
    
    function check_code_exist($code) {

        if(!$this->cms->getByCode($code)){
            return true;
        }else{
            $this->form_validation->set_message('check_code_exist','Le code existe déjà.');
            return false;
        }
    }



    public function edit() {
        $this->load->library('form_validation');

        //information générale
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean|required');
        $this->form_validation->set_rules('code', 'code', 'trim|xss_clean|required|callback_check_code');
        $this->form_validation->set_rules('label', 'label', 'trim|xss_clean|required');
        $this->form_validation->set_rules('value', 'value', 'trim|xss_clean|required');
        $this->form_validation->set_rules('active', 'active', 'trim|xss_clean|required');


        if ($this->form_validation->run() == FALSE) {
            $data["cms"] = $this->cms->get($this->input->post('id'));
            $this->load->templateAdmin('cms/edit',$data);
        } else {
            $this->cms->setId($this->input->post('id'));
            $this->cms->setCode($this->input->post('code'));
            $this->cms->setLabel($this->input->post('label'));
            $this->cms->setValue($this->input->post('value'));
            $this->cms->setActive($this->input->post('active'));

            $this->cms->edit();

            redirect('admin/cmss/index', 'refresh');
        }
    }

    public function delete() {
        $this->cms->setId($this->input->get('id'));

        $result = $this->cms->delete();

        redirect('admin/cmss/index', 'refresh');
    }


}
