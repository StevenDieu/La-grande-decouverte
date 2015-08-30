<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Carnetsdevoyage extends CI_Controller {

    private $data;
    private $limit = 6;


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

        $perPage = $this->limit;

        $this->data['carnetVoyage'] = $this->carnetVoyage->getAllCarnetVoyages($perPage, 0);
        $this->data['activePaginate'] = true;

        if (!empty($this->data['carnetVoyage'])) {
            $this->getImageCarnet();
            if (count($this->data['carnetVoyage']) < 5) {
                $this->data['activePaginate'] = false;
            }
        }


        $this->data["allCss"] = array("liste_carnet");
        $this->data["alljs"] = array("slide", "liste_carnet", "ajaxPaginate");

        $this->data["titre"] = "Liste carnets de voyage";
        $this->load->templateCarnet('/liste_carnet', $this->data);
    }

    private function getImageCarnet() {
        for ($i = 0; $i < count($this->data['carnetVoyage']); $i++) {
            $this->imagesFiche->setid_carnet_voyage($this->data['carnetVoyage'][$i]->cvId);
            $imagesCanetVoyage = $this->imagesFiche->getImagesCarnetVoyage();
            if ($imagesCanetVoyage) {
                $this->data['carnetVoyage'][$i]->lien[0] = $imagesCanetVoyage[0]->lien;
                $this->data['carnetVoyage'][$i]->nom[0] = "image carnet voyage " . ($i + 1);
            } else {
                $this->images->setId_voyage($this->data['carnetVoyage'][$i]->vId);
                $this->images->setEmplacement("image_slider");
                $this->data['images'] = $this->images->getImagesByVoyageEmplacement();
                $this->data['carnetVoyage'][$i]->lien[0] = $this->data['images'][0]->lien;
                $this->data['carnetVoyage'][$i]->nom[0] = $this->data['images'][0]->nom;
            }
        }
    }

    function addInList() {
        $pagePost = $this->input->post('page');
        if (!isset($pagePost) && empty($pagePost)) {
            echo "0";
            return;
        }
        $perPage = $this->limit;   //nombres d'articles par page
        $page = $pagePost * $perPage;  //numero de page
        $this->data['carnetVoyage'] = $this->carnetVoyage->getAllCarnetVoyages($perPage, $page);
        if ($this->data['carnetVoyage']) {
            $this->getImageCarnet();
            $i = 0;
            foreach ($this->data['carnetVoyage'] as $carnetVoyage) {
                if (($i % 3) == 0) {
                    $right = "car1";
                } else if (($i % 3) == 1) {
                    $right = "car2";
                } else {
                    $right = "car3";
                }
                $json["id"][$i] = $carnetVoyage->vId;
                $json["header"][$i] = '<a href="' . base_url("voyage/carnet") . "?id=" . $carnetVoyage->cvId . '" ><li class="listElement-' . $carnetVoyage->vId . ' carnet ' . $right . '"></li></a>';
                $json["content"][$i] = '
                            <div class="titre_sans_hover">' . $carnetVoyage->cvTitre . '</div>
                            <img src = "' . base_url() . 'media/' . $this->data['carnetVoyage'][$i]->lien[0] . '" alt = "' . $this->data['carnetVoyage'][$i]->nom[0] . '"/>
                            <div class="flou"></div>
                            <div class="legende">
                                <div class="containe">
                                    <span class="titre">' . $carnetVoyage->cvTitre . '</span>
                                    <div class="date_auteur"><span>' . $carnetVoyage->vTitre . '</span></div>
                                    <div class="texte">' . substr(strip_tags($carnetVoyage->vAccroche), 0, 370) . "..." . '</div>
                                </div>
                                <span class="lien">Voir le carnet</span>
                            </div>';
                $i++;
            }
            $json["page"] = "carnet";
            $json["nbr_limit"] = $this->limit;
            $json["nbr_list"] = $i;
            echo json_encode($json);
            return;
        }
        echo "0";
    }

}
