<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_article extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
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
            $this->article->id_utilisateur = $this->session->userdata('logged_in')["id"];
            $this->article->id_carnetvoyage = $this->input->post('id_carnet_voyage');
            echo $this->article->addArticle();
        }
    }

    function addImageFiche() {
        $this->load->model('article');
        if (!($this->input->post('nom') || $this->input->post('id_fichevoyage'))) {
            echo "0";
        } else {
            
        }
    }

    public function edit() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'id', 'trim|required|xss_clean');
        $this->form_validation->set_rules('titre', 'titre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('contenu', 'contenu', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            $this->article->id = $this->input->post('id');
            $this->article->titre = $this->input->post('titre');
            $this->article->contenu = str_replace("style/", "style", $this->input->post('contenu'));
            $this->article->visible = "0";
            $this->article->id_utilisateur = $this->session->userdata('logged_in')["id"];
            if ($this->article->verifCompteArticle()) {
                $this->article->setArticle();
                echo "1";
            } else {
                echo "0";
            }
        }
    }

    public function delete() {
        if (!$this->input->post('id')) {
            echo "0";
        } else {
            $this->article->id = $this->input->post('id');
            $this->article->id_utilisateur = $this->session->userdata('logged_in')["id"];
            if ($this->article->verifCompteArticle()) {
                $this->article->deleteArticle();
                echo "1";
            } else {
                echo "0";
            }
        }
    }

}
