<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voyages extends CI_Controller {

    private $id_voyage;

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/connexion', 'refresh');
        }
        $this->load->model('voyage');
        $this->load->model('pays');
        $this->load->model('images');
        $this->load->model('pictoVoyage');
        $this->load->model('infoVoyage');
        $this->load->model('deroulementVoyage');

        $this->load->model('imagePicto');
        $this->load->model('continents');
    }

    public function add() {
        $data["continents"] = $this->continents->getContinents();
        $data["pictos"] = $this->imagePicto->getPictos();
        $data["adminJs"] = array("voyage/voyage");
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/voyage/add_voyage', $data);
    }

    public function edit() {
        if ($this->input->get('id') == null) {
            redirect('admin/voyages/liste', 'refresh');
        }
        $this->id_voyage = $this->input->get('id');

        $this->voyage->setId($this->id_voyage);
        $this->pictoVoyage->setId_voyage($this->id_voyage);
        $this->pays->__set("id_voyage", $this->id_voyage);
        $this->images->setId_voyage($this->id_voyage);
        $this->infoVoyage->__set("id_voyage", $this->id_voyage);
        $this->deroulementVoyage->__set("id_voyage", $this->id_voyage);

        $data["voyage"] = $this->voyage->getVoyage();
        $data["pictoVoyages"] = $this->pictoVoyage->getPictoVoyages();
        $data["pays"] = $this->pays->getPaysByVoyage();
        $data["images"] = $this->images->getImagesByVoyage();
        $data["infoVoyages"] = $this->infoVoyage->getInfoVoyageByVoyage();
        $data["deroulementVoyages"] = $this->deroulementVoyage->getAllDeroulementByVoyage();
        $data["continents"] = $this->continents->getContinents();
        $data["pictos"] = $this->imagePicto->getPictos();

        $data["adminJs"] = array("voyage/voyage");
        $data["id_voyage"] = $this->id_voyage;
        $this->load->helper(array('form'));
        $this->load->templateAdmin('/voyage/edit_voyage', $data);
    }

    public function liste() {
        $this->load->helper(array('form'));
        $data["adminJs"] = array("voyage/voyage");

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
