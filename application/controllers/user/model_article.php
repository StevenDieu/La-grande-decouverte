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

    public function edit() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'id', 'trim|required|xss_clean');
        $this->form_validation->set_rules('titre', 'titre', 'trim|required|xss_clean');
        $this->form_validation->set_rules('contenu', 'contenu', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            $this->article->setId( $this->input->post('id') );
            $this->article->setTitre( $this->input->post('titre') );
            $this->article->setContenu( str_replace("style/", "style", $this->input->post('contenu')) );
            $this->article->setVisible( "0" );
            $this->article->setId_utilisateur( $this->session->userdata('logged_in')["id"] );
            
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
            $this->article->setId( $this->input->post('id') );
            $this->article->setId_utilisateur( $this->session->userdata('logged_in')["id"] );
            if ($this->article->verifCompteArticle()) {
                $this->article->deleteArticle();
                echo "1";
            } else {
                echo "0";
            }
        }
    }

}
