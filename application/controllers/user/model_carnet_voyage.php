<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_carnet_voyage extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('user/account/connexion', 'refresh');
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
            $this->carnetVoyage->titre = $this->input->post('titre');
            $this->carnetVoyage->id_voyage = $this->input->post('id_voyage');
            $this->carnetVoyage->id_utilisateur = $this->session->userdata('logged_in')["id"];

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

            $this->carnetVoyage->titre = $this->input->post('titre');
            $this->carnetVoyage->id = $this->input->post('id');

            $this->carnetVoyage->setCarnetVoyage();

            echo "1";
        }
    }

    public function delete() {
        if (!$this->input->post('id')) {
            echo "0";
        }
        $this->carnetVoyage->id = $this->input->post('id');
        $this->carnetVoyage->deleteCarnetVoyage();
        echo "1";
    }

}
