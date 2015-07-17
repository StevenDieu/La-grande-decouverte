<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voyages extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            echo "co";
            die;
        }
        $this->load->model('voyage');
    }

  /*  public function liste() {
        $data["alljs"] = array("voyage");
        $this->load->helper(array('form'));
        $this->voyage->setId($this->session->userdata('logged_in'));
        $data["voyage"] = $this->voyage->getAllVoyages();
        $this->load->view('user/voyages', $data);
    }*/

    function mesvoyages() {
        $data["alljs"] = array("voyage");
        $data['username'] = $this->session->userdata('logged_in');
        $this->load->helper(array('form'));
        $data["voyage"] = $this->voyage->getVoyageOrderInfo();
        $this->load->view('user/voyages', $data);
    }

    /*public function liste() {
        $data["alljs"] = array("carnetVoyage");
        $this->load->helper(array('form'));
        $this->carnetVoyage->setId_utilisateur($this->session->userdata('logged_in')["id"]);
        $data["carnet_voyages"] = $this->carnetVoyage->getCarnetVoyages();
        $this->load->view('user/carnet/list_carnet_voyage', $data);
    }*/

}
