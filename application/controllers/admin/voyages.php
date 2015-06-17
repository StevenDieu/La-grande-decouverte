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
        $this->load->model('picto');
        $this->load->model('continents');
    }

    public function add() {
        $data["continents"] = $this->continents->getContinents();
        $data["pictos"] = $this->picto->getPictos();
        $data["adminJs"] = array("voyage/add_voyage");
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/voyage/add_voyage', $data);
    }

    public function edit() {
        if (!$this->input->get('id')) {
            redirect('admin/voyages/liste', 'refresh');
        }
        $data["voyage"] = $this->voyage->getVoyage($this->input->get('id'));
        $data["voyageVente"] = $this->voyage->getInfoVoyage($this->input->get('id'));
        $data["continents"] = $this->voyage->getContinents();
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/voyage/edit_voyage', $data);
    }

    public function liste() {
        $this->load->helper(array('form'));
        $data["voyages"] = $this->voyage->getVoyages();
        $this->load->templateAdmin('/voyage/list_voyage', $data);
    }

    public function uploadImage() {
        $this->load->view('admin/voyage/upload/upload_image_voyage.php');
    }

    public function deleteImage() {
        $this->load->view('admin/voyage/upload/delete_image_voyage.php');
    }

}
