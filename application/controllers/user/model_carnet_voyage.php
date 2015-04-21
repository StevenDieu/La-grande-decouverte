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
            redirect('user/carnet_voyages/add', 'refresh');
        } else {
            $this->carnetVoyage->titre = $this->input->post('titre');
            $this->carnetVoyage->id_voyage = $this->input->post('id_voyage');
            $this->carnetVoyage->id_utilisateur = $this->session->userdata('logged_in')["id"];
echo  $this->carnetVoyage->id_voyage;

            $id_carnet_voyage = $this->carnetVoyage->addCarnetVoyage();

            redirect('user/carnet_voyages/edit?id=' . $id_carnet_voyage, 'refresh');
        }
    }

    public function edit() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('titre', 'titre', 'trim|xss_clean');
        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_rules('id_voyage', 'id_voyage', 'trim|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            redirect('user/carnet_voyages/edit', 'refresh');
        } else {

            $this->carnetVoyage->titre = $this->input->post('titre');
            $this->carnetVoyage->id = $this->input->post('id');
            $this->carnetVoyage->id_voyage = $this->input->post('id_voyage');
            $this->carnetVoyage->id_utilisateur = $this->session->userdata('logged_in')["id"];

            $this->carnetVoyage->setCarnetVoyage();

            redirect('user/carnet_voyages/edit?id=' . $this->carnetVoyage->id, 'refresh');
        }
    }

    public function delete() {
        if (!$this->input->get('id')) {
            redirect('user/account', 'refresh');
        }
        $this->carnetVoyage->id = $this->input->get('id');
        $this->carnetVoyage->deleteCarnetVoyage();
        redirect('user/carnet_voyages/liste', 'refresh');
    }

}
