<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnetsdevoyage extends CI_Controller {

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
        $perPage = 6;   //nombres d'articles par page
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;  //numero de page
        //
        // creation fonction getAllCarnVoyages dans le model carnetVoyage
        $data['carnetVoyage'] = $this->carnetVoyage->getAllCarnetVoyages($perPage, $page);

        if ($data['carnetVoyage']) {
            for ($i = 0; $i < count($data['carnetVoyage']); $i++) {
                $this->images->setId_voyage($data['carnetVoyage'][$i]->vId);
                $this->images->setEmplacement("image_slider");
                $data['images'] = $this->images->getImagesByVoyageEmplacement();
                $j = 0;
                foreach ($data['images'] as $image) {
                    $data['carnetVoyage'][$i]->lien[$j] = $image->lien;
                    $data['carnetVoyage'][$i]->nom[$j] = $image->nom;
                    $j++;
                }
            }
            $config['base_url'] = base_url() . "voyage/carnet/liste";
            $config['total_rows'] = $this->carnetVoyage->getRowAllCarnetVoyages();
            $config['per_page'] = $perPage;
            $config["uri_segment"] = 4;
            $this->pagination->initialize($config);
        }

        // génération des css et js
        $data["allCss"] = array("liste_carnet", "ficheproduit");
        $data["alljs"] = array("slide", "liste_carnet");

        //appel du template
        $this->load->templateCarnet('/liste_carnet', $data);
    }

}
