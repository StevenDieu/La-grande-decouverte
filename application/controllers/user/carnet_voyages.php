<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnet_voyages extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->load->helper(array('form'));
        $this->load->model('voyage');
        $this->load->model('carnetVoyage');
        $this->load->model('order');
    }

    public function add() {
        if (!$this->session->userdata('logged_in')) {
            echo 'co';
            die;
        }
        $this->load->helper(array('form'));
        $this->order->setId_utilisateur($this->session->userdata('logged_in')["id"]);
        $data["id_voyages"] = $this->order->getVoyageUtilisateurs();
        $data["voyages"] = array();
        
        if ($data["id_voyages"]) {
            foreach ($data["id_voyages"] as $id_voyages) {
                $this->carnetVoyage->setId_voyage($id_voyages->id_voyage);
                $this->carnetVoyage->setId_utilisateur($this->session->userdata('logged_in')["id"]);
                if ($this->carnetVoyage->getVoyage() == false) {
                    $this->voyage->setId($id_voyages->id_voyage);
                    array_push($data["voyages"], $this->voyage->getVoyage());
                }
            }
        }
        
        $this->load->view('user/carnet/add_carnet_voyage', $data);
    }

    public function liste() {
        $data["alljs"] = array("carnetVoyage");
        $this->load->helper(array('form'));
        $this->carnetVoyage->setId_utilisateur($this->session->userdata('logged_in')["id"]);
        $data["carnet_voyages"] = $this->carnetVoyage->getCarnetVoyages();
        $this->load->view('user/carnet/list_carnet_voyage', $data);
    }

}
