<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Continent extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('voyage');
    }

    public function add() {
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/continent/add_continent');
    }

    public function edit() {
        if (!$this->input->get('id')) {
            redirect('admin/continent/liste', 'refresh');
        }
        $data["continent"] = $this->voyage->getContinent($this->input->get('id'));
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/continent/edit_continent', $data);
    }

    public function liste() {
        $this->load->helper(array('form'));
        $data["continents"] = $this->voyage->getContinents();
        $this->load->templateAdmin('/continent/list_continent', $data);
    }

}
