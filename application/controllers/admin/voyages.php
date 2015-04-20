<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voyages extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('voyage');
    }

    public function add() {
        $data["continents"] = $this->voyage->getContinents();
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/voyage/add_voyage', $data);
    }

    public function edit() {
        if (!$this->input->get('id')) {
            redirect('admin/voyages/liste', 'refresh');
        }
        $data["voyage"] = $this->voyage->getVoyage($this->input->get('id'));
        $data["continents"] = $this->voyage->getContinents();
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/voyage/edit_voyage', $data);
    }

    public function liste() {
        $this->load->helper(array('form'));
        $data["voyages"] = $this->voyage->getVoyages();
        $this->load->templateAdmin('/voyage/list_voyage', $data);
    }

}
