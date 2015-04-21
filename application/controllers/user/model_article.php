<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_article extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('user/account/connexion', 'refresh');
        }
        $this->load->model('article');
    }

    public function add() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('titre', 'titre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('contenu', 'contenu', 'trim|required|xss_clean');
        $this->form_validation->set_rules('id_carnet_voyage', 'id_carnet_voyage', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            $this->article->titre = $this->input->post('titre');
            $this->article->contenu = $this->input->post('contenu');
            $this->article->visible = "0";
            $this->article->id_carnetvoyage = $this->input->post('id_carnet_voyage');
            $this->article->addArticle();

            echo "1";
        }
    }

    public function edit() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'id', 'trim|required|xss_clean');
        $this->form_validation->set_rules('titre', 'titre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('contenu', 'contenu', 'trim|required|xss_clean');
        $this->form_validation->set_rules('id_carnetvoyage', 'id_carnetvoyage', 'required|trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            $this->article->id = $this->input->post('id');
            $this->article->titre = $this->input->post('titre');
            $this->article->contenu = str_replace("style/", "style", $this->input->post('contenu'))  ;
            $this->article->visible = "0";
            $this->article->id_carnetvoyage = $this->input->post('id_carnetvoyage');
            $this->article->setArticle();

            echo "1";
        }
    }

    public function delete() {
        if (!$this->input->get('id')) {
            redirect('user/account', 'refresh');
        }
        $this->article->id = $this->input->get('id');
        $this->article->deleteArticle();
        redirect('user/articles/liste', 'refresh');
    }

}
