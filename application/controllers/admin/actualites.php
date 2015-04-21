<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Actualites extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
        $this->load->model('actualite');
    }

    public function add() {
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/actualite/add_actualite');
    }

    public function edit() {
        if (!$this->input->get('id')) {
            redirect('admin/actualites/liste', 'refresh');
        }
        $data["actualite"] = $this->actualite->getActualite($this->input->get('id'));
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/actualite/edit_actualite', $data);
    }

    public function liste() {
        $data["actualites"] = $this->actualite->getActualites();
        $this->load->templateAdmin('/actualite/list_actualite', $data);
    }

}
