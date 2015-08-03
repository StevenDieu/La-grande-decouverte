<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnet_voyages extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('carnetVoyage');
        $this->load->model('article');
        if (!$this->session->userdata('logged_admin')) {
            redirect('admin/index/connexion', 'refresh');
        }
    }

    public function liste() {
        $data["carnetVoyagesVisibles"] = $this->carnetVoyage->getAllCarnetVoyagesVisibleBO();
        $data["carnetVoyagesNotVisibles"] = $this->carnetVoyage->getAllCarnetVoyagesNotVisibleBO();
        $this->load->templateAdmin('/carnet/list_carnet_voyage', $data);
    }

    public function list_fiche_voyage() {
        if (!$this->input->get('id')) {
            redirect('admin/carnet_voyages/liste', 'refresh');
        }
        $data["adminJs"] = array("ficheVoyage/ficheVoyage");
        $this->article->setId_carnetvoyage($this->input->get('id'));
        $data["articles"] = $this->article->getAllArticle();
        $this->load->templateAdmin('/ficheVoyage/list_fiche_voyage', $data);
    }

    public function visible() {
        if (($this->input->post('id'))) {
            $this->article->setId($this->input->post('id'));
            $this->article->setVisible($this->input->post('visible'));
            if ($this->article->setFicheVisible()) {
                echo "1";
                return;
            }
        }
        echo "0";
        return;
    }

}
