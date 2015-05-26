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
    }

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

        $data["user"] = $this->user->getUser($data['carnetVoyage'][0]->id_utilisateur);
        if ($data["user"][0]->id_image != 0) {
            $this->images->setId($data["user"][0]->id_image);
            $data["image"] = $this->images->getImage();
        }

        $data["articles"] = $this->article->getArticleVisible();

        $this->load->templateCarnet('/carnet', $data);
    }

    public function article() {
        if ($this->input->get('id') == null) {
            redirect('pages/index/', 'refresh');
        }
        $this->article->id = $this->input->get('id');
        $data["articles"] = $this->article->getArticlePublic();

        if ($data['articles'] == null) {
            redirect('pages/index/', 'refresh');
        }
        $data["librairieCss"] = array("font-awesome.min", "froala_editor.min", "froala_style.min");
        $data["allCss"] = array("article");
        $data["alljs"] = array("slide", "ficheVoyage");

        $this->load->templateCarnet('/article', $data);
    }

    public function liste_carnet() {
        $perPage = 6;   //nombres d'articles par page
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;  //numero de page

        // creation fonction getAllCarnVoyages dans le model carnetVoyage
        $data['carnetVoyage'] = $this->carnetVoyage->getAllCarnetVoyages($perPage,$page);

        $config['base_url'] = base_url() . "voyage/carnet/liste_carnet";
        $config['total_rows'] = $this->carnetVoyage->getRowAllCarnetVoyages();
        $config['per_page'] = $perPage; 
        $config["uri_segment"] = 4;

        // génération des css et js
        $data["allCss"] = array("liste_carnet");
        $data["alljs"] = array("slide", "liste_carnet");

        $this->pagination->initialize($config); 


        //appel du template
        $this->load->templateCarnet('/liste_carnet', $data);
    }


    public function voyage() {
        $perPage = 6;   //nombres d'articles par page
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;  //numero de page

        $data['voyage'] = $this->Voyage->getAllVoyages($perPage,$page);

        $config['base_url'] = base_url() . "voyage/carnet/voyage";
        $config['total_rows'] = $this->Voyage->getRowAllVoyages();
        $config['per_page'] = $perPage; 
        $config["uri_segment"] = 4;

        // génération des css et js
        $data["allCss"] = array("voyage");
        $data["alljs"] = array("voyage","slide");

        $this->pagination->initialize($config);

        //appel du template
        $this->load->templateVoyage('/voyage', $data);
    }
}
