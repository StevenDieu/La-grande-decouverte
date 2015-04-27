<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnet_voyages extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            echo 'co';
            die;
        }
        $this->load->helper(array('form'));
        $this->load->model('voyage');
        $this->load->model('carnetVoyage');
        $this->load->model('voyageUtilisateur');
    }

    public function add() {
        $this->load->helper(array('form'));
        $data["id_voyages"] = $this->voyageUtilisateur->getVoyageUtilisateurs($this->session->userdata('logged_in')['id']);
        $data["voyages"] = array();
        foreach ($data["id_voyages"] as $id_voyages) {
            array_push($data["voyages"], $this->voyage->getVoyage($id_voyages->voyage_id));
        }

        $this->load->view('user/carnet/add_carnet_voyage', $data);
    }

    public function liste() {
        $data["alljs"] = array("carnetVoyage");
        $this->load->helper(array('form'));
        $this->carnetVoyage->id_utilisateur = $this->session->userdata('logged_in')["id"];
        $data["carnet_voyages"] = $this->carnetVoyage->getCarnetVoyages();
        $this->load->view('user/carnet/list_carnet_voyage', $data);
    }
}
