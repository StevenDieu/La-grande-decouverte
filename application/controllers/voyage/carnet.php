<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnet extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('carnetVoyage');
        $this->load->model('Voyage');
        $this->load->model('article');

        $this->load->library('pagination');

        $this->load->model('user');
        $this->load->model('images');
        $this->load->model('continents');
    }

    public function index() {
        $data["allCss"] = array("ficheVoyage");
        $data["alljs"] = array("slide", "ficheVoyage");

        if ($this->input->get('id') == null) {
            redirect('pages/index/', 'refresh');
        }

        $this->carnetVoyage->setId($this->input->get('id'));
        $data['carnetVoyage'] = $this->carnetVoyage->getCarnetVoyage();
        $data['imagesCarnetVoyages'] = $this->carnetVoyage->getImagesCarnetVoyage();


        if ($data['carnetVoyage'] == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->article->setId_carnetvoyage($data['carnetVoyage'][0]->id);
        $this->user->setId($data['carnetVoyage'][0]->id_utilisateur);
        $data["user"] = $this->user->getUser();
        $data["articles"] = $this->article->getArticleVisible();

        $this->load->templateCarnet('/carnet', $data);
    }

    public function article() {
        if ($this->input->get('id') == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->article->setId($this->input->get('id'));
        $data["articles"] = $this->article->getArticlePublic();

        if ($data['articles'] == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->carnetVoyage->setId($data["articles"][0]->id_carnetvoyage);
        $data['imagesCarnetVoyages'] = $this->carnetVoyage->getImagesCarnetVoyage();
        $data["librairieCss"] = array("font-awesome.min", "froala_editor.min", "froala_style.min");
        $data["allCss"] = array("article");
        $data["alljs"] = array("slide", "ficheVoyage");

        $this->load->templateCarnet('/article', $data);
    }

}
