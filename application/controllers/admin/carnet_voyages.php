<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnet_voyages extends CI_Controller {

    function __construct() {
        $this->load->helper(array('form'));
        $this->load->model('carnetVoyage');
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
    }

    public function edit() {
        if (!$this->input->get('id')) {
            redirect('admin/carnet_voyages/liste', 'refresh');
        }
        $data["carnet_voyage"] = $this->carnet_voyage->getCarnetVoyage($this->input->get('id'));
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/carnet/edit_carnet_voyage', $data);
    }

    public function liste() {
        $data["carnet_voyages"] = $this->carnet_voyage->getCarnetVoyages();
        $this->load->templateAdmin('/carnet/list_carnet_voyage', $data);
    }

}
