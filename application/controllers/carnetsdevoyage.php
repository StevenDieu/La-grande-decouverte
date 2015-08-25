<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnetsdevoyage extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('carnetVoyage');
        $this->load->model('Voyage');
        $this->load->model('article');
        $this->load->model('imagesFiche');
        
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
        
        if (!empty($data['carnetVoyage'])) {
            for ($i = 0; $i < count($data['carnetVoyage']); $i++) {
                $this->imagesFiche->setid_carnet_voyage($data['carnetVoyage'][$i]->cvId);
                $imagesCanetVoyage = $this->imagesFiche->getImagesCarnetVoyage();
                if ($imagesCanetVoyage) {
                    $data['carnetVoyage'][$i]->lien[0] = $imagesCanetVoyage[0]->lien;
                    $data['carnetVoyage'][$i]->nom[0] = "image carnet voyage " . ($i + 1);
                } else {
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
            }
        }

        // génération des css et js
        $data["allCss"] = array("liste_carnet");
        $data["alljs"] = array("slide", "liste_carnet");

        //appel du template
        $this->load->templateCarnet('/liste_carnet', $data);
    }

}
