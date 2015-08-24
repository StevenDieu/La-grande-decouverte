<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_carnet_voyage extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->load->model('carnetVoyage');
    }

    public function add() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('titre', 'titre', 'trim|xss_clean');
        $this->form_validation->set_rules('id_voyage', 'id_voyage', 'required|trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            $this->carnetVoyage->setTitre( str_replace("'","&#146;",$this->input->post('titre')) );
            $this->carnetVoyage->setId_voyage( $this->input->post('id_voyage') );
            $this->carnetVoyage->setId_utilisateur( $this->session->userdata('logged_in')["id"] );
            $this->carnetVoyage->setToken( random_string("alnum", 49));
            
            echo $this->carnetVoyage->addCarnetVoyage();
        }
    }

    public function edit() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('titre', 'titre', 'trim|xss_clean');
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            $this->carnetVoyage->setTitre( str_replace("'","&#146;",$this->input->post('titre')) );
            $this->carnetVoyage->setId( $this->input->post('id') );
            $this->carnetVoyage->setId_utilisateur( $this->session->userdata('logged_in')["id"] );
            if ($this->carnetVoyage->verifCompte()) {
                $this->carnetVoyage->setCarnetVoyage();
                echo "1";
            } else {
                echo "0";
            }
        }
    }

    public function setPrive() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('id', 'titre', 'trim|xss_clean');
        $this->form_validation->set_rules('prive', 'id', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo "0";
        } else {
            $this->carnetVoyage->setPrive($this->input->post('prive'));
            $this->carnetVoyage->setId( $this->input->post('id') );
            $this->carnetVoyage->setId_utilisateur( $this->session->userdata('logged_in')["id"] );
            if ($this->carnetVoyage->verifCompte()) {
                $this->carnetVoyage->setCarnetVoyagePrive();
                echo "1";
            } else {
                echo "0";
            }
        }
    }

    public function delete() {
        $id = $this->input->post('id');
        if (!isset($id)) {
            echo "0";
            return;
        }
        $this->carnetVoyage->setId( $this->input->post('id') );
        $this->carnetVoyage->setId_utilisateur( $this->session->userdata('logged_in')["id"] );
        if ($this->carnetVoyage->nbrArticle()) {
            echo "-1";
        } else {
            if ($this->carnetVoyage->verifCompte()) {
                $this->carnetVoyage->deleteCarnetVoyage();
                echo "1";
            } else {
                echo "0";
            }
        }
    }

}
