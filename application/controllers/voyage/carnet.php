<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnet extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('carnetVoyage');
        $this->load->model('article');
    }

    /**
     * 
     */
    public function index() {
        $data["allCss"] = array("ficheVoyage");
        $data["alljs"] = array("slide", "ficheVoyage");

        if ($this->input->get('id') == null) {
            redirect('pages/index/', 'refresh');
        }

        $this->carnetVoyage->id = $this->input->get('id');
        $data['carnetVoyage'] = $this->carnetVoyage->getCarnetVoyage();

        if ($data['carnetVoyage'] == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->article->id_carnetvoyage = $data['carnetVoyage'][0]->id;
        $this->article->id_utilisateur = $this->session->userdata('logged_in')["id"];

        $data["articles"] = $this->article->getArticleVisible();

        $this->load->templateCarnet('/carnet', $data);
    }

    public function article() {
        if ($this->input->get('id') == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->article->id = $this->input->get('id');
        $data["articles"] = $this->article->getArticle();

        if ($data['articles'] == null) {
            redirect('pages/index/', 'refresh');
        }
        $data["librairieCss"] = array("font-awesome.min", "froala_editor.min", "froala_style.min");
        $data["allCss"] = array("article");
        $data["alljs"] = array("slide", "ficheVoyage");

        $this->load->templateCarnet('/article', $data);
    }

    public function liste_carnet() {
        // creation fonction getAllCarnVoyages dans le model carnetVoyage
        $data['carnetVoyage'] = $this->carnetVoyage->getAllCarnetVoyages();

        // génération des css et js
        $data["allCss"] = array("liste_carnet");
        $data["alljs"] = array("liste_carnet");

        $this->load->templateCarnet('/liste_carnet', $data);
    }

}
