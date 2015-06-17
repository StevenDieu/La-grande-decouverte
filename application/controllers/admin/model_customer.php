<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_customer extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('user');
        $this->load->library('form_validation');
    }

    public function edit() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('login', 'login', 'trim|xss_clean|required');
        $this->form_validation->set_rules('nom', 'nom', 'trim|xss_clean|required');
        $this->form_validation->set_rules('prenom', 'prenom', 'trim|xss_clean|required');
        $this->form_validation->set_rules('mail', 'mail', 'trim|xss_clean|required');
        $this->form_validation->set_rules('banni', 'banni', 'trim|xss_clean|required');

        if ($this->form_validation->run() == FALSE) {
            $this->user->setId($this->input->post('id'));
            $data["customer"] = $this->user->get();
            $this->load->templateAdmin('customer/edit_customer',$data);
        } else {
            //information générale
            $login = $this->input->post('login');
            $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
            $mail = $this->input->post('mail');
            $banni = $this->input->post('banni');
            $id = $this->input->post('id');

            $this->user->setLogin($login);
            $this->user->setNom($nom);
            $this->user->setPrenom($prenom);
            $this->user->setEmail($mail);
            $this->user->setId($id);

            $this->user->edit();

            redirect('admin/customer/liste', 'refresh');
        }
    }

    public function bannir() {
        $this->user->setId($this->input->get('id'));
        $this->user->bannir();

        redirect('admin/customer/liste', 'refresh');
    }

}
